<div class="direct-chat-msg right"  >
    <div class="direct-chat-infos clearfix">
        <span class="direct-chat-name float-right">{{$messages->user->name}}</span>
        <span class="direct-chat-timestamp float-left">{{$messages->created_at->diffForHumans(null, false, false)}}</span>
    </div>
    <!-- /.direct-chat-infos -->
    <img class="direct-chat-img" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="Message User Image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
        {{$messages->message_text}}
    </div>
    <!-- /.direct-chat-text -->
</div>
