<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Business Lifeline</title>
    <link type="text/css" href="{{ asset('example-diploma/css/style.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <div class="body-content">
        <img src="{{ asset('example-diploma/images/yepo_logo.PNG')}}" class="logo-bg"/>
        <img src="{{ asset('example-diploma/images/bll-training-badges-3@2x.png')}}" class="badge"/>
        <img src="{{ asset('example-diploma/images/1_upperWave.png')}}" class="waves"/>
        <div class="title">
            <h1>CERTIFICATE</h1>
            <h2>OF COMPLETION</h2>
        </div>
        <div class="sub-title">
            This Certificate is awarded to
        </div>
        <div class="receiptant-name">
            <i>%name%</i>
        </div>
        <div class="sub-title1">
            Upon successful completion of
        </div>
        <div class="course-name">
            Business Lifeline Limited’s %course_title%
        </div>
        <div class="course-description">
            %description_short%
        </div>
        <div class="diploma-info-wrapper">
            <div class="date-container">
                <span class="issue-date">%issue_date%</span>
                <hr style="border: 1px solid black;">
                <strong class="signature-underline-text">DATE</strong>
            </div>
            <div class="signature-container">
                <hr style="border: 1px solid black;">
                <strong class="signature-underline-text">NICHOLE JOSEPH-CUPID <br>
                    DIRECTOR
                </strong>
            </div>
        </div>
        <img src="{{ asset('example-diploma/images/signature.PNG')}}" class="sign"
             alt="sign3"/>
        <img src="{{ asset('example-diploma/images/cropped-Business-Lifeline-Logo-02.jpg') }}"
             class="lifeline-logo"/>
        <img src="{{ asset('example-diploma/images/2.png')}}" class="dots"/>
        <img src="{{ asset('example-diploma/images/2.png')}}" class="dots1"/>
        <img src="{{ asset('example-diploma/images/3.png')}}" class="star"/>
        <img src="{{ asset('example-diploma/images/3.png')}}" class="star1"/>
    </div>
    <div class="footer">
        <div class="text">
            This diploma can be verified - View digital diploma at %URL%.
        </div>
        <img src="{{ asset('example-diploma/images/1_lowerWave.png')}}" class="lower-wave"/>
    </div>
</div>
</body>
</html>
