<div wire:poll.750ms>


    Current time: {{ now() }}

    <!-- Direct Chat -->
    <div class="row justify-content-center" >




        <div class="col-md-4">
            <!-- DIRECT CHAT DANGER -->
            <div class="card card-danger direct-chat direct-chat-danger">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <div class="card-tools">
                        <span title="3 New Messages" class="badge">3</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fas fa-comments"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="direct-chat-messages" id="chat">

                        <!-- Sender meassage -->

                        @forelse($message as $messages)

                            @if($messages->isOwner())


                                <div class="direct-chat-msg right"  >
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">{{$messages->user->name}}</span>
                                        <span class="direct-chat-timestamp float-left">{{$messages->created_at->diffForHumans(null, false, false)}}</span>
                                    </div>


                                    <!-- /.direct-chat-infos -->
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        {{$messages->message_text}}
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>


                            @else

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

                            @endif

                        @empty

                                    <h5 style="text-align: center;color:red"> Say Hey !</h5>
                        @endforelse




                    </div>


                </div>
                <!-- /.card-body -->
                <div class="type_msg" >
                    <form wire:submit.prevent="sendMessage">
                        <div class="input-group">
                            <input type="text" onkeydown='scrollDown()' wire:model.defer="textMessage" placeholder="Type Message ..." class="form-control write_msg">
                            <span class="input-group-append">
                      <button type="submit" class="btn btn-danger">Send</button>
                    </span>
                        </div>
                    </form>
                </div>
                <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
