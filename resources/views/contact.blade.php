@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <address>
                <h3>Office Location</h3>
                <p class="lead"><a
                            href="https://www.google.com/maps/place/Hive+Colab/@0.3418368,32.5922385,17z/data=!3m1!4b1!4m5!3m4!1s0x177dbbb1d0fdf0ef:0xde67114eec99fb00!8m2!3d0.3418314!4d32.5944272" target="_blank">
                        HiveColab</a><br>
                    Plot 90, Kanjokya Street<br>
                    4th Floor, Kanjokya House,<br>
                    Kampala, Uganda </p>
                <p><i class="fa fa-clock-o"></i>&nbsp;Monday - Friday: 7am - 8pm<br>
                    <i class="fa fa-clock-o"></i>&nbsp;Saturday: 8am - 6pm</p>
            </address>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label for="InputName">Your Name</label>
                            <div>
                                <input type="text" class="form-control" name="InputName" id="InputName"
                                       placeholder="Enter Name"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Your Email</label>
                            <div class="#">
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                       placeholder="Enter Email" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Message</label>
                            <div class="#">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"
                                  required></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
                            <div class="#">
                                <input type="text" class="form-control" name="InputReal" id="InputReal" required>

                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Submit"
                               class="btn btn-info pull-right">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
