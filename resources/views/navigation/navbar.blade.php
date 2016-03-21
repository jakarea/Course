<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
          <a href="../" class="navbar-brand">Student Name</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="{{route('course.index')}}">All Course</a>
            </li>
            <li>
              <a href="{{route('takecourse.index')}}">Take Course</a>
            </li>
            <li>
              <a href="{{route('coursestatus.index')}}">Taken Course</a>
            </li>
            <li>
              <a href="#">Pending Course</a>
            </li>
            <li>
              <a href="#">Complete Course</a>
            </li>
            <li>
              <a href="{{route('course.create')}}">Add Course</a>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Log Out</a></li>
          </ul>
    </div>
  </div>
</nav>