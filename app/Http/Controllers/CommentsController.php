<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemRepository;
use App\Repositories\CommentRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Redirect;

class CommentsController extends Controller
{

    /**
     * Class constructor
     * @param CommentRepository $comment
     * @param ItemRepository    $item
     */
    public function __construct(
        CommentRepository $comment,
        ItemRepository $item
    )
    {
        $this->commentRepo = $comment;
        $this->itemRepo = $item;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $loggedInUser = Auth::user(); // user logged in
        $comment['from_user'] = $request->user()->id;
        $comment['on_post'] = $request->input('on_post');
        $comment['body'] = $request->input('body');
        $itemSlug = $request->input('slug');

        // save new comment
        $newComment = $this->commentRepo->saveItemComment($comment);

        if ($newComment) {

            // get item by slug
            $item = $this->itemRepo->getItem($itemSlug);
            $itemOwner = $item['user'];
            $itemOwnerName = sprintf('%s %s', $itemOwner['first_name'], $itemOwner['last_name']);

            // email basic headers
            $from = $loggedInUser->email;
            $to = $itemOwner['email'];
            $subject = $item['title'];

            // email template variables
            $emailData = [
              'user' => $itemOwnerName,
              'body' => $newComment->body,
              'url' => sprintf('%s/%s', 'http://www.koll.com.ph/item', $itemSlug),
              'from' => sprintf('%s %s', $loggedInUser->first_name, $loggedInUser->last_name),
              'subject' => $subject,
            ];

            // TODO: Queue the sending of email
            // mailing notifications
            Mail::send('emails.commented', $emailData, function($message) use ($from, $to, $subject) {
                $message->from($from);
                $message->to($to);
                $message->subject($subject);
            });
        }

        return redirect::back()->with('message', 'Comment Published');
    }
}
