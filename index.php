<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HejalDresses – Elegant Fashion Redefined</title>
   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{background:#0d0d0d;color:#eee;line-height:1.8;overflow-x:hidden;}
header{
  position:fixed;
  top:0;
  width:100%;
  background:linear-gradient(90deg,#8b0000,#000);
  padding:25px 10px;
  text-align:center;
  z-index:1000;
  box-shadow:0 3px 15px rgba(0,0,0,0.6);
}
header h1{
  color:#fff;
  font-size:34px;
  letter-spacing:2px;
  cursor:pointer;
  transition:0.3s;
}
header h1:hover{color:#ff4d4d;}
nav{margin-top:12px;}
nav a{
  color:#fff;
  margin:0 18px;
  text-decoration:none;
  font-weight:500;
  position:relative;
}
nav a::after{
  content:'';
  position:absolute;
  left:0;
  bottom:-6px;
  width:0%;
  height:2px;
  background:#ff1a1a;
  transition:0.3s;
}
nav a:hover::after{width:100%;}

.container{max-width:1300px;margin:auto;padding:180px 20px 60px;}
section{margin-bottom:120px;opacity:0;transform:translateY(60px);transition:1s ease;}
section.show{opacity:1;transform:translateY(0);}

h2{color:#ff2a2a;margin-bottom:20px;font-size:32px;text-align:center;}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1520975918318-4c2b9b4a9c6b?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
  padding:160px 30px;
  border-radius:10px;
  text-align:center;
  color:#fff;
  box-shadow:0 5px 20px rgba(0,0,0,0.6);
}
.hero h2{font-size:50px;}
.hero p{max-width:700px;margin:20px auto;}
.btn{
  background:#ff1a1a;
  color:white;
  padding:12px 25px;
  border:none;
  border-radius:30px;
  cursor:pointer;
  font-weight:600;
  transition:0.3s;
}
.btn:hover{background:#cc0000;transform:scale(1.05);}

/* PRODUCTS */
.products{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}
.card{
  background:#1a1a1a;
  border-radius:10px;
  overflow:hidden;
  box-shadow:0 3px 15px rgba(0,0,0,0.5);
  transition:0.4s;
}
.card:hover{transform:translateY(-8px) scale(1.02);}
.card img{
  width:100%;
  height:300px;
  object-fit:cover;
}
.card-content{padding:20px;text-align:center;}
.price{color:#ff4d4d;font-weight:600;margin:10px 0;}

.content-box{
  background:#141414;
  padding:40px;
  border-radius:10px;
  box-shadow:0 3px 15px rgba(0,0,0,0.4);
}

/* FOOTER */
footer{
  background:linear-gradient(90deg,#000,#8b0000);
  padding:60px 20px;
  color:#bbb;
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:40px;
}
footer h3{color:#ff4d4d;margin-bottom:15px;}
footer a{color:#bbb;text-decoration:none;display:block;margin-bottom:8px;}
footer a:hover{color:#fff;}
</style>

<script>
function go(id){
  document.getElementById(id).scrollIntoView({behavior:'smooth'});
}

// Scroll animation
window.addEventListener('scroll',()=>{
  document.querySelectorAll("section").forEach(sec=>{
    const pos = sec.getBoundingClientRect().top;
    if(pos < window.innerHeight - 100){
      sec.classList.add("show");
    }
  });
});
</script>
</head>
<body>

<header>
  <h1 onclick="go('home')">HejalDresses</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('collection')">Collection</a>
    <a onclick="go('about')">About</a>
    <a onclick="go('style')">Style Guide</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<!-- HERO -->
<section id="home" class="hero">
  <h2>Where Elegance Meets Confidence</h2>
  <p>HejalDresses is a fashion destination for women who embrace confidence, grace, and bold modern elegance. Discover premium designs that celebrate your individuality.</p>
  <button class="btn" onclick="go('collection')">Shop Collection</button>
</section>

<!-- COLLECTION -->
<section id="collection">
  <h2>Featured Dresses</h2>
  <div class="products">

    <div class="card"><img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=600&q=80"><div class="card-content"><h3>Evening Red Gown</h3><div class="price">$180</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?auto=format&fit=crop&w=600&q=80"><div class="card-content"><h3>Classic Black Dress</h3><div class="price">$140</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1503342217505-b0a15cf70489?auto=format&fit=crop&w=600&q=80"><div class="card-content"><h3>Luxury Party Wear</h3><div class="price">$210</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1520975867597-0a1b4d1e43e9?auto=format&fit=crop&w=600&q=80"><div class="card-content"><h3>Elegant Silk Dress</h3><div class="price">$195</div></div></div>

  </div>
</section>

<!-- ABOUT (LONG) -->
<section id="about">
  <h2>About HejalDresses</h2>
  <div class="content-box">
    <p>HejalDresses was created to redefine how modern women experience fashion online. We believe dresses are more than garments — they are statements of identity, expressions of confidence, and reflections of personality...</p>
    <p>Our journey started with a passion for elegant silhouettes, luxurious fabrics, and timeless yet modern design. Every piece in our collection is carefully curated to blend comfort, quality, and style...</p>
    <p>We design for women who want to feel empowered at events, celebrations, evenings out, and even everyday moments...</p>
    <p>Our design philosophy focuses on precision tailoring, premium materials, and attention to detail...</p>
    <p>At HejalDresses, we don’t follow trends blindly — we shape them...</p>
    <p>We also prioritize ethical production and responsible sourcing...</p>
    <p>Customer experience is at the heart of everything we do...</p>
    <p>Looking forward, HejalDresses aims to become a global symbol of modern elegance...</p>
  </div>
</section>

<!-- STYLE GUIDE -->
<section id="style">
  <h2>Fashion & Style Guide</h2>
  <div class="content-box">
    <p>Choosing the perfect dress is about more than size and color — it’s about mood, personality, and occasion...</p>
    <p>Our style experts recommend selecting tones that complement your skin tone...</p>
    <p>Accessories can transform a look from simple to unforgettable...</p>
    <p>Seasonal styling is another key element...</p>
    <p>Confidence is the best outfit you can wear...</p>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <h2>Contact Us</h2>
  <div class="content-box">
    <p>Email: support@hejaldresses.com</p>
    <p>Phone: +1 (800) 444-9898</p>
    <p>Hours: Mon – Fri, 9am – 6pm</p>
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>HejalDresses</h3>
      <p>Luxury fashion crafted for modern elegance. Designed with passion, worn with confidence.</p>
    </div>
    <div>
      <h3>Shop</h3>
      <a href="#">New Arrivals</a>
      <a href="#">Best Sellers</a>
      <a href="#">Evening Wear</a>
      <a href="#">Wedding Collection</a>
    </div>
    <div>
      <h3>Help</h3>
      <a href="#">Contact</a>
      <a href="#">Returns</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> HejalDresses. All rights reserved.</p>
</footer>

</body>
</html>
