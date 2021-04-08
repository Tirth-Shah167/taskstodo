@extends ('blogs.layout')
@section ('content')


<body>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
        
        <img src="https://images.unsplash.com/photo-1547480053-7d174f67b557?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" width="450" height="400">

                        <Br></Br>

      <p class="leading-relaxed text-lg"> To-do lists don't need to be complicated—plenty of people use a pen and paper for the job without any problem. And yet a new to-do list app seems to come out every day. Why? Because keeping track of your tasks is an intensely personal thing, and people will reject anything that doesn't feel right pretty much instantly. </p>
      <p class="leading-relaxed text-lg"> "Task TO DO" is a to do list webapp which helps you to bifercate your work in Several Tasks. </p>
      <p class="leading-relaxed text-lg"> Now, without wasting more time lets "Get Started". </p>
      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
      
        <BR></BR>

      <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Get Strated </a>

                <Br></Br>

    </div>
  </div>
</section>
</body>
</html>

@endsection 