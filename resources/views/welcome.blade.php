<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>XYZ Institution</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">

  </head>
  <body>

    <header>
		@include('hpnavbar')
    </header>

    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" img src="{{URL::asset('/images/admission.jpg')}}" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>ADMISSIONS ARE OPEN!</h1>
                <p>Application Deadline: 18 Decemeber 2022</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Apply Now</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" img src="{{URL::asset('/images/scholarship.jpg')}}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>SCHOLARSHIP AND FINANCIAL AID</h1>
                <p>XYZ Institution is proud to honor academically talented and exceptionally skilled students with a variety of scholarships and awards. The Institution annually awards more than 100 million takas as scholarships to its students.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{URL::asset('/images/campuslife.jpg')}}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>CAMPUS LIFE</h1>
                <p>XYZ Institution has a specially designed campus to not only provide quality education but also a support system that aids students in becoming confident and self-reliant.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Message From The Founder<span class="text-muted"></span></h2>
            <p class="lead">Since its inception in 2001, XYZ Institution has become one of the most reputed educational institution in Bangladesh. We have focused on generating new knowledge and promoting critical thinking amongst our students, graduating more than 7,000 young men and women during this time.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" img src="{{URL::asset('/images/founder.jpeg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Message from the Head<span class="text-muted"></span></h2>
            <p class="lead">XYZ Institution is ranked highly in this country which is a great achievement. However, we aim ambitiously high to ontinuously improve this Institution. We shall benchmark ourselves against the best and eventually become one of them.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" img src="{{URL::asset('/images/vc.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
		<!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" img src="{{URL::asset('/images/calendar.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Calendar</h2>
            <p><a target="_blank" class="btn btn-secondary" href="https://cdn.generalblue.com/calendar/2022-calendar-with-holidays-portrait-sunday-start-en-bd-765x990.webp" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{URL::asset('/images/career.jpeg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Career</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{URL::asset('/images/contact.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Contact</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
