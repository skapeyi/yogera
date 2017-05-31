@extends('layouts.app')

@section('content')
    <div class="container" id="content-container">
        <div class="row">        

            <div class="col-md-10 col-md-offset-2">
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
    </div>

@endsection
