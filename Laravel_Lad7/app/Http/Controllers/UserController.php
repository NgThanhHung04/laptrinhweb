<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Favorites;
use App\Models\User;

class UserController extends Controller
{
    public function delete($userId)
    {
        $user = User::find($userId);

        // Kiểm tra nếu người dùng có bài viết
        $hasPosts = Post::where('user_id', $userId)->exists();

        // Kiểm tra nếu người dùng có sở thích
        $hasInterests = Interest::where('user_id', $userId)->exists();

        if ($hasPosts || $hasInterests) {
            return response()->json(['message' => 'Không được phép xóa người dùng.']);
        }

        // Nếu không có bài viết và không có sở thích, xóa người dùng
        $user->delete();

        return response()->json(['message' => 'Người dùng đã được xóa thành công.']);
    }

    /**
     * Hiển thị thông tin chi tiết của người dùng
     */
    public function show($userId)
    {
        // Lấy thông tin user_profile
        $userProfile = UserProfile::where('user_id', $userId)->first();

        // Lấy danh sách bài viết của người dùng
        $posts = Post::where('user_id', $userId)->get();

        // Lấy danh sách sở thích của người dùng
        $interests = Interest::where('user_id', $userId)->get();

        return view('user.detail', [
            'userProfile' => $userProfile,
            'posts' => $posts,
            'interests' => $interests
        ]);
    }
}
