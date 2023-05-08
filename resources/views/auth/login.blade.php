<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet' />
    <link rel="stylesheet" href="style.css">
    <title> Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        <blade charset|%20%26%2334%3Butf-8%26%2334%3B%3B>html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        font,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        caption,
        tbody,
        tfoot,
        thead,
        th {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            text-decoration: none;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        /* remember to define focus styles! */
        :focus,
        a:focus,
        a:active {
            outline: 0;
        }

        /* remember to highlight inserts somehow! */
        ins {
            text-decoration: none;
        }

        del {
            text-decoration: line-through;
        }

        /* tables still need 'cellspacing="0"' in the markup */
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* float uygulanan elemanlari kapsayamama sorunu */
        .kapsayamamaSorunu:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        .kapsayamamaSorunu {
            display: inline-block;
        }

        /* IE-mac de bu bolumu sakla \ */
        * html .kapsayamamaSorunu {
            height: 1%;
        }

        .kapsayamamaSorunu {
            display: block;
        }

        /* IE-mac bu bolumu saklam artik */
        /* Css Sifirlama */
        html {
            height: 100%;
            background-color: #ecf0f1;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
        }

        .t {
            clear: both;
        }

        #flatix {
            width: 300px;
            height: 465px;
            top: 40%;
            left: 50%;
            margin-left: -150px;
            margin-top: -210px;
            position: absolute;
            background-color: white;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
        }

        header {
            width: 260px;
            height: auto;
            text-align: center;
            padding: 20px;
            color: white;
            background-color: #34495e;
            -moz-border-top-left-radius: 5px;
            -webkit-border-top-left-radius: 5px;
            -khtml-border-top-left-radius: 5px;
            -moz-border-top-right-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -khtml-border-top-right-radius: 5px;
        }

        h1.title {
            font-size: 20px;
            font-weight: 400;
            text-shadow: 1px 1px 1px #2c3e50;
        }

        section {
            width: 260px;
            height: auto;
            padding: 20px;
            padding-top: 30px;
        }

        .loginform a {
            font-size: 13px;
            color: #2f08db;
        }

        .loginform a:hover {
            text-decoration: underline;
        }

        .mail {
            width: 260px;
            height: auto;
            padding: 17px 17px 17px 20px;
            font-size: 15px;
            color: #7f8c8d;
            background: #ecf0f1 url(http://www.ahmetkaplan.net/calismalar/flatixlogin/images/user.png) no-repeat 12px;
            margin-bottom: 25px;
            border: 0px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            ransition: .3s ease-in-out;
            -webkit-transition: .3s ease-in-out;
        }

        .mail:hover {
            box-shadow: 0px 0px 5px #3498db;
        }

        .mail:focus {
            box-shadow: 0px 0px 5px #2ecc71;
            color: #2ecc71;
        }

        .password {
            width: 260px;
            height: auto;
            padding: 17px 17px 17px 20px;
            font-size: 15px;
            color: #7f8c8d;
            background: #ecf0f1 url(http://www.ahmetkaplan.net/calismalar/flatixlogin/images/pass.png) no-repeat 12px;
            margin-bottom: 20px;
            border: 0px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            transition: .3s ease-in-out;
            -webkit-transition: .3s ease-in-out;
        }

        .password:hover {
            box-shadow: 0px 0px 5px #3498db;
        }

        .password:focus {
            box-shadow: 0px 0px 5px #2ecc71;
            color: #2ecc71;
        }

        .login {
            width: 260px;
            height: auto;
            padding: 10px;
            text-align: center;
            font-size: 16px;
            color: white;
            text-shadow: 1px 1px 1px #c0392b;
            box-shadow: 0px 3px 0px #c0392b;
            margin-top: 20px;
            ;
            background-color: #e74c3c;
            border: 0px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            transition: .3s ease-in-out;
            -webkit-transition: .3s ease-in-out;
        }

        .login:hover {
            background-color: #c0392b;
        }

        a {
            font-size: 16px;
            color: #21c1f2;
        }

        footer {
            width: 280px;
            height: auto;
            text-align: center;
            padding: 10px;
            color: white;
            background-color: #34495e;
            font-size: 14px;
            bottom: 0;
            position: absolute;
            -moz-border-bottom-left-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -khtml-border-bottom-left-radius: 5px;
            -moz-border-bottom-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            -khtml-border-bottom-right-radius: 5px;
        }

        .invalid-feedback {
            align-content: left;
            padding-top: 100px;
        }

    </style>
</head>

<body>
    <div id="flatix">
        <header>
            <h1 class="title"><i class="fa fa-user"></i> Login Here!!!</h1>
        </header>
        <section>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="loginform">
                    <input id="email" type="email" class="mail @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email"
                        placeholder="{{ __('E-Mail Address') }}" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" placeholder="{{ __('Password') }}"
                        class="password @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    @if(Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <input type="submit" class="login" value="{{ __('Login') }}">
                </div>
            </form>
            {{-- <div style="padding-top: 20px;">
                    <p style="font-size: 14px;">Don't have an account?</p><strong style="font-weight: bolder;"><a href="register">Sign Up</a> </strong>
                </div> --}}

        </section>
        <footer>
            Thanks!!
        </footer>

    </div>
</body>

</html>
