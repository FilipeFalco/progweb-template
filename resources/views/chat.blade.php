<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QHelp - Chat</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/reset.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/chat.css') ?>" type="text/css">

    <!-- CSS - Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div>
        <div class="row">
            <div class="col s4">
                <div class="user-wrapper">
                    <ul class="users">
                        <li class="user">
                            <span class="pending">1</span>

                            <div class="row valign-wrapper">
                                <div class="col s4 m2">
                                    <img src="https://via.placeholder.com/150" alt="" class="circle responsive-img valign" />
                                </div>

                                <div class="col s8 m10 media-body">
                                    <p class="name">Filie Falco</p>
                                    <p class="email">teste@teste.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>

                            <div class="row valign-wrapper">
                                <div class="col s4 m2">
                                    <img src="https://via.placeholder.com/150" alt="" class="circle responsive-img valign" />
                                </div>

                                <div class="col s8 m10 media-body">
                                    <p class="name">Filie Falco</p>
                                    <p class="email">teste@teste.com</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col s8" id="messages">
                <div class="message-wrapper">
                    <ul class="messages">
                        <li class="message clearfix">
                            <div class="send">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>
                        <li class="message clearfix">
                            <div class="send">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>
                        <li class="message clearfix">
                            <div class="send">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>
                        <li class="message clearfix">
                            <div class="send">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>
                        <li class="message clearfix">
                            <div class="send">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem, ipsum dolor.</p>
                                <p class="date">1 Sep,</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="input-text">
                    <input type="text" name="message" class="submit">
                </div>
            </div>
        </div>
    </div>
</body>

</html>