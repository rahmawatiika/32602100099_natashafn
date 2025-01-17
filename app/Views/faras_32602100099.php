<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <style>
.about {
  display:block;
  flex-direction: column;
  align-items: center;
}

.about-us,
.about-experience {
  padding: 20px;
  text-align: center;
  background-color: #f2f2f2;
  border-radius: 10px;
  margin-bottom: 20px;
}

.about-us h1,
.about-experience h1 {
  color: #333;
  margin-bottom: 10px;
}

.about-us p {
  font-size: 16px;
  color: #666;
}

.about-experience-list table {
  width: 100%;
  border-collapse: collapse;
}

.about-experience-list th,
.about-experience-list td {
  padding: 10px;
  border: 1px solid #333;
}

.about-experience-list th {
  background-color: #f2f2f2;
  text-align: center;
  font-weight: bold;
}

.about-experience-list td {
  text-align: left;
  font-size: 14px;
}

@media (min-width: 600px) {
  /* Styles for larger screens */
  .about {
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
  }

  .about-us,
  .about-experience {
    flex: 1;
    margin: 0 10px;
  }

  .about-us p {
    font-size: 18px;
  }

  .about-experience-list td {
    font-size: 16px;
  }
}


</style>
</head>
<body>
<div class="navbar">
        <div class="navbar-sosmed">
            <ul>
              <li href="#">Home</li>
              <li href="#">About Us</li>
              <li href="#">Portofolio</li>
              <li href="#">Contact</li>
            </ul>
        </div>
      <div class="navbar-sosmed">
        <ul>
        <li><i class="fab fa-linkedin"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-facebook"></i></li>
        <li><i class="fab fa-whatsapp"></i></li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Natasha Faras Nabila
        </span><br>
        <span class="description">
            Mahasiswa Fakultas Teknologi Industri, Jurusan Teknik Informatika
        </span>
    </div>
    <div class="container">
        <div class="main mt-5">
        <div class="about">
    <div class="about-us">
        <h1>About Us</h1>
        <p>An undergraduate student at the 
          Faculty of Industrial Technology, 
          majoring in Informatics Engineering 
          from the Islamic University of 
          Sultan Agung Semarang</p>
    </div>
    <div class="about-experience">
        <h1>experience</h1>
        <div class="about-experience-list">
            <table border='1'>
                <tr>
                    <th rowspan='3'>2020</th>
                    <th colspan='2'>Direct of Photography</th>
                    <th rowspan='3'>2021</th>
                    <th colspan='2'>Processing Auido Video 2D & 3D</th>
                </tr>
                <tr>
                    <td>Jakarta</td>
                    <td>Indonesia</td>
                    <td>Jakarta</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td colspan='2'>Being Responsible for Placing 
                      an Angel in a Short Film</td>
                    <td colspan='2'>Final Value Determinants that 
                      process an audio visual, 2D and 3D animation</td>
                </tr>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</body>
</html>



