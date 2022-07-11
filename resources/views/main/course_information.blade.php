<?php

$headers = [
    "Preparing the 3D Files", "UE5 First Steps", "Importing 3D Files",
    "Project Settings", "Lumen Settings", "Lumen Reflections", "Geometry corrections",
    "Lighting with SunSky", "Copy x Instance", "Materials", "Migrate", "Unreal Uppdate",
    "Exportation", "Assets Optimization", "Artificial Lighting", "Resources",
    "Tress and Dviz Packs", "Foliage Tool", "Levels", "Decals", "Project Optimization",
    "Animations", "Collision", "Blueprints", "Raytracing", "Animation Render(Movie Render Queue)",
    "Package"
];

$headersContent = [
    [
        "Units Setup", "Layer Organizing", "Mesh Optimization", "3D Materials", "IDs",
        "Texture Mapping - Part 1", "Texture Mapping - Part 2", "Pivots", "FBX Exportation",
    ],
    [
        "Unreal Engine Instalation", "Unreal Engine Interface",
    ],
    [
        "Importing and Organizing Assets", "Complex Meshes and Polygon Count",
    ],
    [
        "Project Settings and Actors", "Lighting Actors and Mobility", "Lumen Activation",
    ],
    [
        "Post Process Volume", "Lumen Settings", "Lumen Bounces"
    ],
    [
        "Improving the Reflection", "Quality"
    ],
    [
        "Mesh adjustments",
    ],
    [
        "Lighting with SunSky", "Archviz Template", "Cameras",
    ],
    [],
    [
        "Unreal Materials", "Nodes", "Instances", "Using Textures", "Texture Rotator and Intensity",
        "Wall and Linear Interpolate", "Variations", "Glass and Translucent Domain", "Miscellaneous Materials - Part 1",
        "Miscellaneous Materials - Part 2", "Emissive Materials"
    ],
    [
        "Importing Unreal Assets"
    ],
    [],
    [
        "Exporting from Unreal", "Updating 3D Meshes", "Project improvements",
    ],
    [
        "Nanite", "LOD", "Texture",
    ],
    [
        "Rectangular and Spot Light", "IES", "Timelapse - Artificial Lighting",
    ],
    [
        "Quixel Bridge", "UE Marketplace, Poly Haven, 3D", "Sky"
    ],
    [
        "Migrating Tree and Grass - Part 1", "Migrating Tree and Grass - Part 2"
    ],
    [],
    [],
    [],
    [
        "Material Assign", "Timelapse - Material Assign", "Level Migrate - Part 1",
        "Level Migrate - Part 2", "File Organization", "Timelapse - File Organization"
    ],
    [
        "TVs", "Animated Objects", "Material Adjustments", "High Resolution Screenshots",
        "Sequence", "Camera Shake", "Animating Objects", "Sequence Rendering",
        "Movie Render Queue - Part 1", "Movie Render Queue - Part 2"
    ],
    [],
    [
        "Chapter Presentation", "What's Blueprints?", "First Person Character", "Sound Cue",
        "Simple Door", "Sliding Door", "Menu Creation", "Menu Animation", "Light On/Off",
        "TVs", "Water Animation", "Conclusion"
    ],
    [
        "Enable Raytracing", "Raytracing Settings", "Path Tracer"
    ],
    [
        "Raytracing + Movie Render Queue", "Path Tracer + Movie Render Queue", 'How to remove "animation Flickering"',
    ],
    [
        "Package", "Closure"
    ]
];

$headerNumber = 1;
$zero = "0";
?>

<section class="course__information">

    <p>The course has more than <mark>50 hours</mark> of straight content,
        covering the details, concepts and fundamentals (theory + technique) From installation,
        from Scratch! How to import files, which file format is the best choice, and much more.
        All classes with <mark>Portuguese and English audio!</mark>
    </p>

    <h2>Look how extraordinary the Course is! <br>
        Check the schedule.</h2>
    <article class="course__results">
        @if( isset($headers))

        @foreach($headers as $key => $header)

        <ul>
            <li>
                @if($headerNumber < 10) <h3>{{ $zero . $headerNumber . " - " . $header}}</h3>
                    @else
                    <h3>{{ $headerNumber . " - " . $header}}</h3>
                    @endif
            </li>

            <?php

            $contents = $headersContent[$key];

            ?>
            @foreach($contents as $content)
            <li>
                <div class="circle"></div>
                <span>{{$content}}</span>
            </li>
            @endforeach

        </ul>
        <?php
        $headerNumber++;
        ?>
        @endforeach

        @endif
    </article>

</section>