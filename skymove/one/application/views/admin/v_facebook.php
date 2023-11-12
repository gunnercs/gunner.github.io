<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4 border-left-primary ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">FACEBOOK</h6>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 ">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">INBOX</h6>
            </div>
            <div class="card-body chat_head">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Message</th>
                                <th>Social</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <td>1</td>
                                <td onclick="open_chat()">Customer A : สวัสดีครับ กิมจิผักกาดราคาเท่าไหร่ครับ</td>
                                <td><span class="text-primary">Facebook</span></td>
                                <td>14/10/2566 20:36 น.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Customer B : สวัสดีครับ มีค่าส่งมั้ยครับ</td>
                                <td><span class="text-primary">Facebook</span></td>
                                <td>14/10/2566 20:36 น.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body chat_body" style="display:none">
                <div class="chat">
                <button class="btn btn-success" onclick="back_chat()">back</button>
                    <div class="row" id="box_chat">
                        <div class="col col-md-9" style="padding: 0px;">
                            <div class="chat__1">
                                <span>Facebook : CH202310221302</span>
                            </div>
                            <div class="chat__2">
                                <div class="m_left">
                                    <div class="t_left">
                                        message left
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_right">
                                    <div class="t_right">
                                        message right
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_left">
                                    <div class="t_left">
                                        message left
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_right">
                                    <div class="t_right">
                                        message right
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_left">
                                    <div class="t_left">
                                        message left
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_right">
                                    <div class="t_right">
                                        message right
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_left">
                                    <div class="t_left">
                                        message left
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_right">
                                    <div class="t_right">
                                        message right
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>
                                <div class="m_left">
                                    <div class="t_left">
                                        message left
                                    </div>
                                    <span class="m_time">13:02</span>
                                </div>

                            </div>
                            <div class="chat__4">
                                <span><textarea name="" class="form-control" id="chat_text_box"></textarea></span>
                            </div>
                        </div>
                        <div class="col col-md-3" style="padding: 0px;">
                            <div class="chat__3">
                                <span>User</span>
                                
                            </div>
                            <div class="chat__3">
                                <div class="user_f">
                                <img class="img-profile rounded-circle" src="http://skymovetransport.com/one/adminassets/img/undraw_profile.svg"><span>Office Online</span> <span class="span_a">A</span>
                                </div>
                                
                            </div>
                            <div class="chat__3">
                               
                                <div class="user_f">
                                <img class="img-profile rounded-circle" src="http://skymovetransport.com/one/adminassets/img/undraw_profile.svg"><span>gunner nethip</span> <span class="span_c">C</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function open_chat(){
        $('.chat_body').show();
        $('.chat_head').hide();
    }
    function back_chat(){
        $('.chat_body').hide();
        $('.chat_head').show();
    }
</script>
<style>
    .span_a{
        position: absolute;
        right: 10px;
        background-color: lightgreen;
        color: #fff;
        padding: 0px 4px;
        border-radius: 5px;
        box-shadow: 0px 2px 12px -7px #0
    }
    .span_c{
        position: absolute;
        right: 10px;
        background-color: cornflowerblue;
        color: #fff;
        padding: 0px 4px;
        border-radius: 5px;
        box-shadow: 0px 2px 12px -7px #0
    }
    .user_f img{
        width: 35px;
        padding-right: 5px;
    }
    .m_time{
        font-size: .8rem;
    }
    .m_left{
        padding: 7px;
        text-align: -webkit-left;
    }
    .m_right{
        padding: 7px;
        text-align: -webkit-right;
    }
    .t_left{
        background-color: #f2f2f2;
        width: max-content;
        padding: 7px 10px;
        border-radius: 10px;
        box-shadow: 0px 2px 7px -2px;
    }
    .t_right{
        background-color: lightskyblue;
        width: max-content;
        padding: 7px 10px;
        border-radius: 10px;
        box-shadow: 0px 2px 7px -2px;
        color: #fff;
    }
    #box_chat{
        padding: 10px;
    }
    #box_chat .col{
        border: 1px solid #ddd;
    }
    .chat__1,.chat__2,.chat__3{
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }
    #chat_text_box{
        width: 100%;
    }
    .chat__2{
        height: 400px;
        overflow-y: scroll;
    }
</style>