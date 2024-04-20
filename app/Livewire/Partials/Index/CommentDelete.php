<?php

namespace App\Livewire\Partials\Index;

use App\Models\Comment;
use App\Models\Photo;
use Exception;
use Livewire\Component;

class CommentDelete extends Component
{
    public $commentId;
    public $comment;
    public $photo;

    public function commentDelete()
    {
        $this->dispatch(
            'main_modal',
            id: $this->photo->id,
            topDivider: true,
            bottomDivider: false,
            topClose: true,
            bottomClose: false,
            modalTitle: 'Comments',
            componentName: 'PhotoCommentModal',
            modalTitleClass: 'font-bold text-center'
        );
        $this->dispatch('photo_comment', id: $this->photo->id);

        Comment::find($this->comment->id)->delete();
    }

    public function render()
    {
        $this->comment = Comment::find($this->commentId);
        try {
            $this->photo = Photo::find($this->comment->photo_id);
        } catch (Exception $err) {
            // 
        }

        return view('livewire.partials.index.comment-delete');
    }
}
