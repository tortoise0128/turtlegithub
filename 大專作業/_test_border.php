<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 

.boxBorder {
  width: 300px;
  height: 300px;
  display: inline-block;
  background: none;
  border: none;
  transition: color .2s;
  position: relative;
  overflow: hidden;
  transform: translateZ(0);
  cursor: pointer !important;
}

.boxBorder:before, .boxBorder:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 8px solid transparent;
  will-change: transform;
  transition: transform .3s ease;
  pointer-events: none;
  transform: translateZ(0);
}

.boxBorder:before {
  border-color: #F2B46D transparent;
  transform: skew(-81deg, 0);
}

.boxBorder:after {
  border-color: transparent #F2B46D;
  transform: skew(0, 70deg);
  transition: transform .4s;
}

.boxBorder:hover {
  color: #F2B46D;
}

.boxBorder:hover:before, .boxBorder:hover:after {
  transform: skew(0, 0);
}

    </style>
</head>
<body>
    <div class="boxBorder"><img src="img/180748 (1).jpg" alt=""></div>
</body>
</html>