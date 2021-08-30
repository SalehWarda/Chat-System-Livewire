<div class="direct-chat-msg" >
    <div class="direct-chat-infos clearfix">
        <span class="direct-chat-name float-left">{{$messages->user->name}}</span>
        <span class="direct-chat-timestamp float-right">{{$messages->created_at->diffForHumans(null, false, false)}}</span>
    </div>
    <!-- /.direct-chat-infos -->
    <img class="direct-chat-img" src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="Message User Image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
        {{$messages->message_text}}
    </div>
    <!-- /.direct-chat-text -->
</div>
