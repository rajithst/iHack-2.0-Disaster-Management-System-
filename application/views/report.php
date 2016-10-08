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

        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Report/setreport');?>">

            <div class="form-group">

                <label for="district" class="control-label col-xs-2">District</label>

                <div class="col-xs-8">

                    <select id="districtname" name="dname">
                        <option value="">---- Select District -----</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Matara">Matara</option>

                    </select>

                </div>

            </div>
            <br>

            <div class="form-group">

                <label for="subcity" class="control-label col-xs-2">Enter Sub City</label>

                <div class="col-xs-10">

                    <input type="text" class="form-control" id="subcity" placeholder="Sub City" name="subc">

                </div>

            </div>

            <br><br>
            <div class="form-group">
                <label for="comment" class="control-label col-xs-2">Description</label>
                <div class="col-xs-10">
                <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
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
                    <div class="radio">
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
                <label for="upload" class="control-label col-xs-2">Upload Images</label>
                <div class="col-xs-10">
                    <label class="control-label">Select Video</label>
                    <input id="input-1" type="file" class="file">
                </div>

            </div>



            <center><div id="map" style="height: 500px; width:70% "></div></center>
            <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 7.8731, lng: 80.7718},
                        zoom: 10
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGtu56PVgl9dJd2BVGM80ZqlPRE9Q_beo&callback=initMap"
                    async defer></script>


            <br> <br>
            <div class="form-group">

                <div class="col-xs-offset-2 col-xs-10">

                    <center>
                        <button type="submit" class="btn btn-round btn-success btn-lg">Submit Post</button>
                        <button type="reset" class="btn btn-round btn-danger btn-lg">Cancel Post</button>

                    </center>

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
