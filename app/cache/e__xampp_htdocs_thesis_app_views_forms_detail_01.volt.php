<html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <title>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</title>

    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:"MS Mincho";
            panose-1:2 2 6 9 4 2 5 8 3 4;}
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Tahoma;
            panose-1:2 11 6 4 3 5 4 4 2 4;}
        @font-face
        {font-family:"\@MS Mincho";
            panose-1:2 2 6 9 4 2 5 8 3 4;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin:0in;
            margin-bottom:.0001pt;
            font-size:12.0pt;
            font-family:"Times New Roman",serif;}
        h1
        {margin:0in;
            margin-bottom:.0001pt;
            text-align:center;
            page-break-after:avoid;
            font-size:20.0pt;
            font-family:"Times New Roman",serif;}
        h2
        {margin:0in;
            margin-bottom:.0001pt;
            line-height:150%;
            page-break-after:avoid;
            font-size:14.0pt;
            font-family:"Times New Roman",serif;
            font-weight:normal;}
        p.MsoHeader, li.MsoHeader, div.MsoHeader
        {margin:0in;
            margin-bottom:.0001pt;
            text-align:justify;
            font-size:14.0pt;
            font-family:"Times New Roman",serif;}
        p.Char, li.Char, div.Char
        {mso-style-name:" Char";
            margin-top:0in;
            margin-right:0in;
            margin-bottom:6.0pt;
            margin-left:0in;
            text-align:center;
            page-break-before:always;
            font-size:11.0pt;
            font-family:"Tahoma",sans-serif;
            color:white;
            letter-spacing:1.0pt;
            font-weight:bold;}
        @page WordSection1
        {size:595.35pt 842.0pt;
            margin:56.7pt 70.9pt 56.7pt 85.05pt;}
        div.WordSection1
        {page:WordSection1;}
        -->
    </style>

</head>

<body lang=EN-US>

<div class=WordSection1>

    <p class=MsoNormal align=center style='text-align:center'>
        <b>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</b>
    </p>

    <p class=MsoNormal align=center style='text-align:center'>
        <b>
            <span>
                  Độc lập - Tự do - Hạnh phúc
            </span>
        </b>
    </p>

    <br clear=ALL>

    <?php echo $this->tag->form(array('forms/complete', 'method' => 'post')); ?>
    <?php echo $this->tag->hiddenField(array('id', 'value' => '01')); ?>
    <h1 style='margin-top:12.0pt;margin-right:0in;margin-bottom:.25in;margin-left:0in'><span style='font-size:14.0pt'>ĐƠN XIN HOÃN THI LẦN
            <?php echo $form_infor['number']; ?>
        </span></h1>

    <p class=MsoHeader>Kính gửi: <b>Phòng Đào Tạo</b></p>

    <p class=MsoHeader style='margin-top:6.0pt;margin-right:0in;margin-bottom:.25in;margin-left:0in'>             
        <b>Trường Đại học Công nghệ, Đại học Quốc gia Hà Nội</b></p>

    <p class=MsoNormal style='margin-top:6.0pt;line-height:150%'><span
                style='font-size:14.0pt;line-height:150%'>Họ và tên: <?php echo $infor->fullname; ?></span> <span style='font-size:14.0pt;line-height:150%; margin-left: 80px;'>Mã số sinh viên: <?php echo $infor->student_code; ?></span></p>

    <h2><span style='line-height:150%'>Ngày sinh:<?php echo $infor->birthday; ?></span> <span style='font-size:14.0pt;line-height:150%; margin-left: 80px;'>         Lớp:</span></h2>

    <h2><span style='line-height:150%'>Số điện thoại: <?php echo $infor->phone; ?></span> <span style='font-size:14.0pt;line-height:150%; margin-left: 80px;'>Email <?php echo $infor->email; ?></span></h2>

    <h2><span style='line-height:150%'>Xin hoãn thi học phần:
           <?php echo $form_infor['term']; ?>
        </span></h2>

    <h2><span style='line-height:150%'>Giảng viên giảng dạy:
           <?php echo $form_infor['teacher']; ?>
        </span></h2>

    <p class=MsoNormal style='line-height:150%'><span style='font-size:14.0pt;line-height:150%'>Thi ngày:
            <?php echo $form_infor['date']; ?>
        </span></p>

    <p class=MsoHeader style='line-height:150%'><span style='line-height:150%'>Lý do:
            <?php echo $form_infor['reason']; ?>
        </span></p>
    <?php echo $this->tag->endform(); ?>
    <p class=MsoNormal style='line-height:150%'><span style='font-size:14.0pt;
line-height:150%'>Em xin cam đoan những lời khai trên đây là đúng sự thật, nếu sai em xin hoàn toàn chịu trách nhiệm</span></p>
    <br>

    <p class=MsoHeader>                                                       Hà Nội, ngày <?php echo date('d'); ?> tháng <?php echo date('m'); ?> năm <?php echo date('Y'); ?></p>

    <p class=MsoHeader>                                                                           <b>Người làm đơn</b></p>

    <p class=MsoNormal style='text-indent:.5in'><span style='font-size:14.0pt'>                                                             <i>(Ký và ghi rõ họ tên)</i></span></p>
    <br><br><br><br><br>
    <p class=MsoNormal style='line-height:150%'><span style='font-size:14.0pt;line-height:150%'>                                                                           <?php echo $infor->fullname; ?></span></p>


</div>

</body>

</html>

