<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
    <title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
    <meta name="description" content="{{$PageDescription}}"/>
    <meta name="keywords" content="{{$PageKeywords}}"/>
    <style>
        html, body {
          margin: 0;
          width: 100%;
          height: 100%;
          overflow: hidden;
          background-color: #000;
        }
      </style>
</head>


<body>

        <script src="{{ URL::asset('/tinht/js/three.min.js') }}"></script>
        <script src="{{ URL::asset('/tinht/js/panolens.min.js') }}"></script>
        <script>

            var panorama, viewer;



            var assetPath = '/uploads/topics/';

            var topic = {!! json_encode($Topic->toArray()) !!};

            var photo_file = topic.attach_file;
            
            panorama = new PANOLENS.ImagePanorama(assetPath + photo_file);
            viewer = new PANOLENS.Viewer({
                container: document.body,        // A DOM Element container
                controlBar: true,             // Vsibility of bottom control bar
                controlButtons: [],            // Buttons array in the control bar. Default to ['fullscreen', 'setting', 'video']
                autoHideControlBar: true,        // Auto hide control bar
                autoHideInfospot: true,            // Auto hide infospots
                horizontalView: false,            // Allow only horizontal camera control
                cameraFov: 60,                // Camera field of view in degree
                reverseDragging: true,            // Reverse orbit control direction
                enableReticle: true,            // Enable reticle for mouseless interaction
                dwellTime: 1500,            // Dwell time for reticle selection in millisecond
                autoReticleSelect: true,        // Auto select a clickable target after dwellTime
                viewIndicator: true,            // Adds an angle view indicator in upper left corner
                indicatorSize: 30,            // Size of View Indicator
                output: 'console'            // Whether and where to output infospot position. Could be 'console' or 'overlay'
            });
            viewer.add( panorama );
            
        </script>            

    
</body>
</html>