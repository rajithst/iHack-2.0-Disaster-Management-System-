<?php include 'components/page_head.php'?>

</head>

<body>

<div class="container">
    <div class="row">

        <center>
            <h2>Report Early</h2>
        </center>
        <br> <br>

           <center><p> Through this form you can report your early warning to us</p></center>

        <form class="form-horizontal">

            <div class="form-group">

                <label for="district" class="control-label col-xs-2">District</label>

                <div class="col-xs-8">

                    <select id="districtname" class="dd">
                        <option value="">---- Select District -----</option>
                        <option value="">colombo</option>
                        <option value="">galle</option>
                        <option value="">matara</option>

                    </select>

                </div>

            </div>
            <br>

            <div class="form-group">

                <label for="subcity" class="control-label col-xs-2">Enter Sub City</label>

                <div class="col-xs-10">

                    <input type="subcity" class="form-control" id="subcity" placeholder="Sub City">

                </div>

            </div>

            <br><br>
            <div class="form-group">
                <label for="comment" class="control-label col-xs-2">Description</label>
                <div class="col-xs-10">
                <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
            </div>


            <div class="form-group">
                <label for="rate" class="control-label col-xs-2">Rate here</label>
                <div class="col-xs-10">
                    <div class="radio">
                        <label><input type="radio" name="himpotant">Highly Important</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="important">Important</label>
                    </div>
                    <div class="radio disabled">
                        <label><input type="radio" name="notimportant">Not Important</label>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="upload" class="control-label col-xs-2">Upload Images</label>
                <div class="col-xs-10">
                    <label class="control-label">Select File</label>
                    <input id="input-1" type="file" class="file">
                </div>

            </div>




            <div class="form-group">

                <div class="col-xs-offset-2 col-xs-10">

                    <button type="submit" class="btn btn-primary">Login</button>

                </div>

            </div>

        </form>




        <div class="col-md-2 col-xs-2 col-lg-2"></div>

    </div>


    </div>


<?php include "components/page_tail.php";?>


<script>

    $(document).ready(function () {


    });



</script>
