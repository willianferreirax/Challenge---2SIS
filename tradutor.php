<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/header.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RS Prototype</title>

</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

    <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>

    <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>

    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>


    <symbol id="tradutor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
    </symbol>

    <symbol id="cadastrar" viewBox="0 0 16 16">

        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
    </symbol>
</svg>

<body>
    <video class="input_video" style="display: none;"></video>

    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">


                        <img width="100" height="50" src="images/kisspng-midland-dow-chemical-company-chemical-industry-dup-dow-logo-5a75303cb53f19.5870197215176295007424.png" alt="">
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">

                        <li>
                            <a href="index.php" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#home" />
                                </svg>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="tradutor.php" class="btn btn-danger">

                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#tradutor" />
                                </svg>
                                Tradutor
                            </a>
                        </li>

                        <?php if (!isset($_SESSION['user']) && !isset($_SESSION['dev'])) { ?>
                            <li>
                                <a href="cadastro.php" class="nav-link text-light">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#cadastrar" />
                                    </svg>
                                    Cadastrar
                                </a>
                            </li>

                            <li>
                                <a href="login.php" class="nav-link text-light">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#people-circle" />
                                    </svg>
                                    Login
                                </a>
                            </li>

                        <?php } ?>

                        <?php if (isset($_SESSION['dev'])) { ?>

                            <li>
                                <a href="treinar.php" class="nav-link text-light">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#speedometer2" />
                                    </svg>
                                    DashBoard
                                </a>
                            </li>

                        <?php } ?>

                        <?php if (isset($_SESSION['user']) || isset($_SESSION['dev'])) { ?>

                            <li>
                                <a href="contribuir.php" class="nav-link text-light">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#speedometer2" />
                                    </svg>
                                    Contribuir
                                </a>
                            </li>

                        <?php } ?>


                    </ul>
                </div>
            </div>
        </div>

    </header>

    <div class="container-fluid mt-4">

        <div class="row">

            <div class="col-md-4">

            </div>

            <div class="col-md-4">

                <div class="row">

                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <canvas class="output_canvas" width="500px" height="400px"></canvas>

                        <!-- Placehoder for design development (no need to load the camera) uncomment to active-->
                        <!-- <div style="background-color: blue; height: 400px; width: 500px;"></div> -->
                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="contribuir.php" class="btn btn-md btn-danger">Ajude a melhorar nossa aplicação!</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12 d-flex justify-content-center align-items-center">

                <div>
                    <h2 class="mb-2" id="lastSentence"></h2>
                    <h2 id="translate"></h2>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/camera_utils/camera_utils.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/control_utils/control_utils.js" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/drawing_utils/drawing_utils.js" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.1/dist/tf.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/holistic/holistic.js" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="module">
        var result_test

        const videoElement = document.getElementsByClassName('input_video')[0];
        const canvasElement = document.getElementsByClassName('output_canvas')[0];
        const canvasCtx = canvasElement.getContext('2d');

        var result;

        const model = await tf.loadLayersModel('https://testtfod.s3.us-east.cloud-object-storage.appdomain.cloud/model.json');

        var sequence = [];
        var sentence = [];
        var predictions = [];
        var res;
        var html;
        var lastSentence = [];
        const threshold = 0.5;
        const actions = ['positivo', 'negativo', 'adeus','feliz','bola'];

        function getResult(results) {

            drawStyledLandMarks(results);


            result_test = extractKeypoints(results);

            sequence.push(result_test);
            sequence = sequence.slice(Math.max(sequence.length - 30, 0)); //pegar ultimos 30 itens do array

            // arr.indexOf(Math.max(...arr)) mesma coisa que => argmax() -> retorna a posicao do maior
            // arr[-30:] mesma coisa que => arr.slice(Math.max(arr.length - 30, 0))
            // np.unique(predictions.slice(Math.max(arr.length - 10, 0)))[0] mesma coisa que => predictions.slice(Math.max(arr.length - 10, 0)).filter((v, i, a) => a.indexOf(v) === i)[0]

            //tf.expand_dims(arr,0) mesma coisa que => np.expand_dims(sequence, axis = 0)

            //console.log(sequence.length); //deve ser sempre um array de arrays com 30 arrays

            if (sequence.length == 30) {

                res = model.predict(tf.expandDims(sequence, 0)).arraySync()[0] // é um array de 3 posiçoes com a porcentagem de certeza de cada ação; [0] pq é um array dentro de array
                // console.log("RES => "+res[0]);
                // console.log("RES => "+res.length);
                // console.log("DIMS => "+ tf.expandDims(sequence, 0));
                // return;
                console.log(actions[res.indexOf(Math.max(...res))]);
                predictions.push(res.indexOf(Math.max(...res)))

                if (predictions.slice(Math.max(predictions.length - 10, 0)).filter((v, i, a) => a.indexOf(v) === i)[0] == res.indexOf(Math.max(...res))) {

                    if (res[res.indexOf(Math.max(...res))] > threshold) {

                        if (sentence.length > 0) {

                            if (actions[res.indexOf(Math.max(...res))] != sentence[sentence.length - 1]) {
                                sentence.push(actions[res.indexOf(Math.max(...res))])
                            }
                        } else {
                            sentence.push(actions[res.indexOf(Math.max(...res))])
                        }
                    }
                }

                if (sentence.length > 5) {
                    sentence = sentence.slice(Math.max(sentence.length - 5, 0));
                }

            }

            console.log(sentence);


            if (sentence.length == 5) {

                lastSentence = sentence;

                sentence = [];

                html = "<p>";

                lastSentence.forEach((res) => {
                    html += res + " ";
                })

                html += "</p>";

                $('#lastSentence').empty();
                $('#translate').empty();
                $('#lastSentence').html(html);
            } else {
                html = "<p>";

                sentence.forEach((res) => {
                    html += res + " ";
                })

                html += "</p>";

                $('#translate').empty();
                $('#translate').html(html);
            }


            // console.log("Total: "+result_test.length);
            // console.log(result_test);

        }

        function drawStyledLandMarks(results) {

            // console.log(results.leftHandLandmarks);

            canvasCtx.save();

            canvasCtx.clearRect(0, 0, canvasElement.width, canvasElement.height);

            canvasCtx.drawImage(results.image, 0, 0, canvasElement.width, canvasElement.height);

            // drawConnectors(
            //     canvasCtx, 
            //     results.poseLandmarks, 
            //     POSE_CONNECTIONS,
            //     {color: '#00FF00', lineWidth: 4}
            // );

            // drawLandmarks(
            //     canvasCtx, 
            //     results.poseLandmarks,
            //     {color: '#FF0000', lineWidth: 2}
            // );

            // drawConnectors(
            //     canvasCtx, 
            //     results.faceLandmarks, 
            //     FACEMESH_TESSELATION,
            //     {color: '#C0C0C070', lineWidth: 1}
            // );

            drawConnectors(
                canvasCtx,
                results.leftHandLandmarks,
                HAND_CONNECTIONS, {
                    color: '#CC0000',
                    lineWidth: 5
                }
            );

            drawLandmarks(
                canvasCtx,
                results.leftHandLandmarks, {
                    color: '#00FF00',
                    lineWidth: 2
                }
            );

            drawConnectors(
                canvasCtx,
                results.rightHandLandmarks,
                HAND_CONNECTIONS, {
                    color: '#00CC00',
                    lineWidth: 5
                }
            );

            drawLandmarks(
                canvasCtx,
                results.rightHandLandmarks, {
                    color: '#FF0000',
                    lineWidth: 2
                }
            );

            canvasCtx.restore();
        }

        const holistic = new Holistic({
            locateFile: (file) => {
                return `https://cdn.jsdelivr.net/npm/@mediapipe/holistic/${file}`;
            }
        });

        // console.log(model);

        // console.log(slice);

        holistic.setOptions({
            modelComplexity: 0,
            smoothLandmarks: false,
            minDetectionConfidence: 0.5,
            minTrackingConfidence: 0.5
        });

        holistic.onResults(getResult);

        const no_sequences = 30;

        const sequence_length = 30;

        const camera = new Camera(videoElement, {
            onFrame: async () => {

                await holistic.send({
                    image: videoElement
                })

            },
            width: 1280,
            height: 720

        });

        camera.start();

        function extractKeypoints(results) {

            // var pose = [];
            // var face = [];
            var lh = [];
            var rh = [];

            var array = [];

            // console.log(results.poseLandmarks);

            // if(results.poseLandmarks){

            //     results.poseLandmarks.forEach((res)=>{
            //         // console.log(res);

            //         array = [res.x, res.y, res.z, res.visibility];
            //         pose.push(array);

            //         // console.log(pose);
            //     });

            // }
            // else{

            //     pose = new Array(33*4).fill(0);

            // }

            if (results.rightHandLandmarks) {

                results.rightHandLandmarks.forEach((res) => {
                    // console.log(res);

                    array = [res.x, res.y, res.z];
                    rh.push(array);

                    // console.log(pose);
                });

            } else {
                rh = new Array(21 * 3).fill(0);
            }

            if (results.leftHandLandmarks) {

                results.leftHandLandmarks.forEach((res) => {
                    // console.log(res);

                    array = [res.x, res.y, res.z];
                    lh.push(array);

                    // console.log(pose);
                });

            } else {

                lh = new Array(21 * 3).fill(0);
            }

            // if(results.faceLandmarks){

            //     results.faceLandmarks.forEach((res)=>{
            //         // console.log(res);

            //         array = [res.x, res.y, res.z];
            //         face.push(array);

            //     });

            // }
            // else{

            //     face = new Array(468*3).fill(0);

            // }

            // face = face.flat();
            // pose = pose.flat();
            lh = lh.flat();
            rh = rh.flat();

            // console.log("Face: "+face.length);
            // console.log("Pose: "+pose.length);
            // console.log("Esquerda: "+lh.length);
            // console.log("Direita: "+rh.length);

            var full = [];

            return full.concat( /*pose, face,*/ lh, rh);;

        }
    </script>

</body>

</html>