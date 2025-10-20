<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    section {
        position: relative;
        background: #161f27;
        min-height: 100vh;
        overflow: hidden;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    section::before {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(#3bdf8d, #ffa600);
        border-radius: 50%;
        transform: translate(-250px, 120px);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    }

    section::after {
        content: '';
        position: absolute;
        width: 350px;
        height: 350px;
        background: linear-gradient(#3bdf8d, #ffa600);
        border-radius: 50%;
        transform: translate(250px, 120px);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    }

    .box {
        position: relative;
        min-width: 350px;
        min-height: 400px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        z-index: 10;
        padding: 20px;
        backdrop-filter: blur(25px);
    }

    .box h3 {
        color: #fff;
        margin-bottom: 26px;
    }

    .box .list {
        position: relative;
        display: flex;
        background: rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-radius: 10px;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.5s;
        overflow: hidden;
    }

    .box .list:hover {
        background: #fff;
        box-shadow: -15px 30px 50px rgba(0, 0, 0, 0.5);
        transform: scale(1.15) translateX(30px) translateY(-15px);
        z-index: 1000;
    }

    .box .list .img-box {
        position: relative;
        width: 60px;
        height: 60px;
        overflow: hidden;
        border-radius: 10px;
        margin-right: 10px;
    }

    .box .list .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
    }

    .box .list .content .rank {
       position: absolute;
       right: absolute;
       color: #3494e2;
       transition: 0.5s;
       font-style: 2em;
       opacity: 0.3;
    }

    .box .list .content .rank small {
        font-weight: 500;
        opacity: 0.25;
    }

    .box .list:hover .content .rank {
        right: 20px;
    }

    .box .list .content h4 {
        line-height: 1.2em;
        font-weight: 600;
        transition: 0.5s;
    }

    .box .list .content p {
        font-size: 0.75em;
        transition: 0.5s;
    }

    .box .list:hover .content h4,
    .box .list:hover .content p {
        color: #333;
    }
</style>

<section id="projects">
    <div class="box">
        
        <h3>Here are some of the projects I have worked on:</h3>
        <div class="list">
            <div class="img-box">
                <img src="images/promed.png" alt="">
            </div>
            <div class="content">
                <h2 class="rank">
                    <small>#</small>1
                </h2>
                <h4>Promedic Healthcare System</h4>
                <p> PHP, JAVA, Javascript,HTML, CSS, MYSQL.</p>
            </div>
        </div>
        <div class="list">
            <div class="img-box">
                <img src="images/toll.png" alt="">
            </div>
            <div class="content">
                <h2 class="rank">
                    <small>#</small>2
                </h2>
                <h4>Electronic Toll Collection System</h4>
                <p> Laravel, C#, MYSQL.</p>
            </div>
        </div>
        <div class="list">
            <div class="img-box">
                <img src="images/ticket.png" alt="">
            </div>
            <div class="content">
                <h2 class="rank">
                    <small>#</small>3
                </h2>
                <h4>Ticketing System</h4>
                <p> PYTHON(Django Framework), MYSQL.</p>
            </div>
        </div>
        <div class="list">
            <div class="img-box">
                <img src="images/pharm.png" alt="">
            </div>
            <div class="content">
                <h2 class="rank">
                    <small>#</small>4
                </h2>
                <h4>Promedic e-pharmacy</h4>
                <p> PHP, JavaScript, CSS, HTML MYSQL.</p>
            </div>
        </div>
        <div class="list">
            <div class="img-box">
                <img src="images/tele.png" alt="">
            </div>
            <div class="content">
                <h2 class="rank">
                    <small>#</small>5
                </h2>
                <h4>First Mutual Telemedicine</h4>
                <p> JavaScript, PHP, HTML, CSS, MYSQL.</p>
            </div>
        </div>
        <div class="list">
            <div class="img-box">
                <img src="images/gmail.png" alt="">
            </div>
            <div class="content">
                <h2 class="rank">
                    <small>#</small>6
                </h2>
                <h4>GMAIL API</h4>
                <p> Node.Js, MySQL.</p>
            </div>
        </div>
    </div>
</section>