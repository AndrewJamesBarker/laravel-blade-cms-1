@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me</h2>

    <p>
    I'm a Full Stack Developer with an eye for front-end design, experience in developing back-end systems and databases, and a knack for solving complex problems. My experience includes working with companies that rely on Drupal and React to build dynamic, user-centric web applications. I thrive on creating solutions that are not only functional but also intuitive and visually engaging.
    I'm always looking for ways to improve my skills and stay up-to-date with the latest technologies. I'm a team player who enjoys collaborating to create innovative solutions.
    </p>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($projects as $project)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$project->title}}</h3>

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                
                </p>

                <a href="/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue"></h2>

    <p>
        <br>
       Contact:<a href="https://www.linkedin.com/in/andrew-james-barker-/">Linkedin</a>
    </p>

</section>

@endsection
