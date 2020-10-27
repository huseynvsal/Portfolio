@extends('index')
@section('main')
    <div class="login">
        <div class="login_inner">
            <div class="page_headers">
                <p class="page_texts" id="login">Login</p>
                <div class="page_underlines"></div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="contact_infos">
                @csrf
                <input id="email" type="email" class="contact_inputs @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                @error('email')
                    <script>toastr.error('Email is invalid');</script>
                @enderror
                <input id="password" type="password" class="contact_inputs @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                @error('password')
                    <script>toastr.error('Password is invalid');</script>
                @enderror
                <button type="submit" class="submit">
                    {{ __('Submit') }}
                </button>
            </form>
        </div>
    </div>
    <div class="about" id="about">
        <div class="page_headers">
            <p class="page_texts">About</p>
            <div class="page_underlines"></div>
        </div>
        <div class="hexagons_main">
            <div class="about_hexagons">
                <div class="hexagons_rotate"><div class="hexagons"><i class="fa fa-clock-o"></i></div></div>
                <h1 class="hex_header">Fast</h1>
                <p class="hex_info">Fast load times and lag free interaction, my highest priority.</p>
            </div>
            <div class="about_hexagons">
                <div class="hexagons_rotate"><div class="hexagons"><i class="fa fa-laptop"></i></div></div>
                <h1 class="hex_header">Responsive</h1>
                <p class="hex_info">My layouts will work on any device, big or small.</p>
            </div>
            <div class="about_hexagons">
                <div class="hexagons_rotate"><div class="hexagons"><i class="fa fa-free-code-camp"></i></div></div>
                <h1 class="hex_header">Intuitive</h1>
                <p class="hex_info">Strong preference for easy to use, intuitive UX/UI.</p>
            </div>
            <div class="about_hexagons">
                <div class="hexagons_rotate"><div class="hexagons"><i class="fa fa-rocket"></i></div></div>
                <h1 class="hex_header">Dynamic</h1>
                <p class="hex_info">Websites don't have to be static, I love making pages come to life.</p>
            </div>
        </div>
        <div class="info_main">
            <div class="info">
                <div class="hex_pic" style="background-image: url({{asset('portfolio/images/hex_pic.png')}});"></div>
                <h1 class="info_header">Who's this guy?</h1>
                <p class="info_text">I am studying computer engineering at ASOIU University in Baku.
                    I have serious passion for frontend and backend web development.</p>
                <a href="#contact" class="t_contact">Let's make something together</a>

            </div>
            <div class="lang_main">
                <div class="lang">
                    <div class="lang_name">HTML</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">80%</p>
                    </div>
                </div>
                <div class="lang">
                    <div class="lang_name">CSS</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">70%</p>
                    </div>
                </div>
                <div class="lang">
                    <div class="lang_name">Javascript</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">60%</p>
                    </div>
                </div>
                <div class="lang">
                    <div class="lang_name">Jquery</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">65%</p>
                    </div>
                </div>
                <div class="lang">
                    <div class="lang_name">PHP</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">50%</p>
                    </div>
                </div>
                <div class="lang">
                    <div class="lang_name">LARAVEL</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">55%</p>
                    </div>
                </div>
                <div class="lang">
                    <div class="lang_name">C++</div>
                    <div class="lang_info">
                        <div class="lang_knowledge"><div class="lang_animated"></div></div>
                        <p class="lang_percent">45%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects" id="projects">
        <div class="page_headers">
            <p class="page_texts">Projects</p>
            <div class="page_underlines"></div>
        </div>

        <div class="category_links">
            <div class="categories">
                <div id="all" class="category active_category">All</div>
                <div id="fe" class="category">Front-end</div>
                <div id="be" class="category">Back-end</div>
                <div id="fs" class="category">Full stack</div>
                <div class="float_bar"></div>
            </div>
        </div>

        @foreach($projects as $key=>$project)
            <div class="project {{$project->category}}">
                <div class="project_animated">
                    <img class="project_image" src="{{asset('portfolio/images/'.$project->image.'')}}">
                    <div class="project_info">
                        <h1>{{$project->project_name}}</h1>
                        <p>HTML @foreach($tools as $tool) @if($project->id == $tool->project_id) / {{$tool->tool}} @endif @endforeach</p>
                        <a href="{{$project->url}}" class="website">Check out</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="project">
            <div class="project_animated">
                <img class="project_image" src="{{asset('portfolio/images/coming_soon.png')}}">
            </div>
        </div>

    </div>
    <svg preserveAspectRatio="none" viewBox="0 0 100 102">
        <path d="M0 0 L50 100 L100 0 Z" fill="#f5f5f5" stroke="#f5f5f5"></path>
    </svg>
    <div class="contact" id="contact">
        <div class="contact_inner">
            <div class="page_headers">
                <p class="page_texts">Contact</p>
                <div class="page_underlines"></div>
            </div>
            <p class="contact_text">Have a question or want to work together?</p>
            <div class="contact_infos">
                <input name="name" class="contact_inputs" type="text" placeholder="Full name">
                <input name="email" class="contact_inputs" type="email" placeholder="Enter email">
                <textarea name="message" placeholder="Your message"></textarea>
                <button class="submit">Submit</button>
            </div>
        </div>
    </div>
    <script>
        var token = '{{ csrf_token() }}';
        var url = "{{route('message')}}";
    </script>
@endsection
