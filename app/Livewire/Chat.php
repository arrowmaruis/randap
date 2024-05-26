<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Models\MessageView;
use Illuminate\Support\Facades\Auth;

class Chat extends Component
{


    public $messages;
    public $content;
    public $user_id;
    public $rules = [
        'content' => 'required|string',
    ];

    public function mount()
    {
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->messages = Message::with('user')->get();
        $this->user_id = Auth::id();
    }

    public function sendMessage()
    {
        // $this->validate();

        Message::create([
            'user_id' => Auth::id(),
            'content' => $this->content,
        ]);

        $this->loadMessages();

        $this->content = '';
    }

    public function markMessageAsViewed($messageId)
{
    $userId = Auth::id();

    // Vérifie si l'utilisateur a déjà vu ce message
    $view = MessageView::where('user_id', $userId)
                        ->where('message_id', $messageId)
                        ->first();

    // Si l'utilisateur n'a pas encore vu ce message, enregistre-le
    if (!$view) {
        MessageView::create([
            'user_id' => $userId,
            'message_id' => $messageId,
        ]);
    }
}

  



    public function render()
    {
        return view('livewire.chat');
    }
    
    // Rafraîchir automatiquement les messages
     public function refreshMessages()
     {
         $this->loadMessages();
     }
}
