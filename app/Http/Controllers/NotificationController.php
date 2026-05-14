<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\View\View;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request): View
    {
        $notifications = $request->user()
            ->notifications()
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('notifications.index', compact('notifications'));
    }

    public function show(Request $request, string $id): View
    {
        /** @var DatabaseNotification $notification */
        $notification = $request->user()->notifications()->where('id', $id)->firstOrFail();

        if ($notification->read_at === null) {
            $notification->markAsRead();
        }

        return view('notifications.show', compact('notification'));
    }

    public function markAllAsRead(Request $request): RedirectResponse
    {
        $request->user()->unreadNotifications()->update(['read_at' => now()]);

        return redirect()->route('notifications.index')
            ->with('success', __('All notifications marked as read.'));
    }

    public function destroyAll(Request $request): RedirectResponse
    {
        $request->user()->notifications()->delete();

        return redirect()->route('notifications.index')
            ->with('success', __('All notifications were deleted.'));
    }
}
