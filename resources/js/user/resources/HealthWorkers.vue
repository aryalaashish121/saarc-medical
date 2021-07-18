<template>
  <div class="py-15">
    <h1><i class="fas fa-user-md mr-5"></i> Registered Health Workers</h1>

    <!-- Workers Details -->
    <div class="health-workers-div mt-5">
      <div class="health-workers">
        <div class="pic">
          <img src="/images/doctor1.jpg" alt="" />
        </div>
        <div class="workers-detail">
          <h3 class="title">Aashish Aryal</h3>
          <span class="post">Dentist</span>
        </div>
        <ul class="social">
          <li><a href="" class="fab fa-facebook"></a></li>
          <li><a href="" class="fab fa-instagram"></a></li>
          <li><a href="" class="fab fa-twitter"></a></li>
          <li><a href="" class="fa fa-phone"></a></li>
        </ul>
      </div>
      <div class="health-workers">
        <div class="pic">
          <img src="/images/doctor1.jpg" alt="" />
        </div>
        <div class="workers-detail">
          <h3 class="title">Aashish Aryal</h3>
          <span class="post">Dentist</span>
        </div>
        <ul class="social">
          <li><a href="" class="fab fa-facebook"></a></li>
          <li><a href="" class="fab fa-instagram"></a></li>
          <li><a href="" class="fab fa-twitter"></a></li>
          <li><a href="" class="fa fa-phone"></a></li>
        </ul>
      </div>
      <div class="health-workers">
        <div class="pic">
          <img src="/images/doctor2.jpg" alt="" />
        </div>
        <div class="workers-detail">
          <h3 class="title">Nikesh Bista</h3>
          <span class="post">ENT Especialist</span>
        </div>
        <ul class="social">
          <li><a href="" class="fab fa-facebook"></a></li>
          <li><a href="" class="fab fa-instagram"></a></li>
          <li><a href="" class="fab fa-twitter"></a></li>
          <li><a href="" class="fa fa-phone"></a></li>
        </ul>
      </div>
    </div>
    <div class="health-workers-div mt-5">
      <div class="health-workers">
        <div class="pic">
          <img src="/images/doctor2.jpg" alt="" />
        </div>
        <div class="workers-detail">
          <h3 class="title">Nikesh Bista</h3>
          <span class="post">ENT Especialist</span>
        </div>
        <ul class="social">
          <li><a href="" class="fab fa-facebook"></a></li>
          <li><a href="" class="fab fa-instagram"></a></li>
          <li><a href="" class="fab fa-twitter"></a></li>
          <li><a href="" class="fa fa-phone"></a></li>
        </ul>
      </div>

      <div class="health-workers">
        <div class="pic">
          <img src="/images/doctor1.jpg" alt="" />
        </div>
        <div class="workers-detail">
          <h3 class="title">Aashish Aryal</h3>
          <span class="post">Dentist</span>
        </div>
        <ul class="social">
          <li><a href="" class="fab fa-facebook"></a></li>
          <li><a href="" class="fab fa-instagram"></a></li>
          <li><a href="" class="fab fa-twitter"></a></li>
          <li><a href="" class="fa fa-phone"></a></li>
        </ul>
      </div>
      <div class="health-workers">
        <div class="pic">
          <img src="/images/doctor1.jpg" alt="" />
        </div>
        <div class="workers-detail">
          <h3 class="title">Aashish Aryal</h3>
          <span class="post">Dentist</span>
        </div>
        <ul class="social">
          <li><a href="" class="fab fa-facebook"></a></li>
          <li><a href="" class="fab fa-instagram"></a></li>
          <li><a href="" class="fab fa-twitter"></a></li>
          <li><a href="" class="fa fa-phone"></a></li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
};
</script>
<style>
h1 {
  text-align: center;
  color: #0568c4;
  font-size: 35px;
  text-shadow: 0 0 2px #ff0000;
  margin-bottom: 50px;
}
.health-workers-div {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 80%;
  margin: auto;
}
.health-workers {
  background: #ffff;
  text-align: center;
  overflow: hidden;
  position: relative;
  margin: 0px 25px;
  border-radius: 30px;
  padding: 30px 70px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.health-workers .pic {
  display: inline-block;
  width: 130px;
  height: 130px;
  margin-bottom: 0px;
  z-index: 1;
  position: relative;
}
.health-workers .pic::before {
  content: "";
  width: 100%;
  height: 0;
  border-radius: 50%;
  background: #1785eb;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 0.2;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}
.health-workers:hover .pic::before {
  height: 100%;
}
.health-workers .pic:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #1785eb;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}
.health-workers .pic img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
}
.health-workers:hover .pic img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}
.health-workers .workers-detail {
  margin-bottom: 30px;
  margin-top: 35px;
}
.health-workers .title {
  font-size: 22px;
  font-weight: 700px;
  color: #4e5052;
  letter-spacing: 1px;
  margin-bottom: 5px;
}
.health-workers .post {
  display: block;
  font-size: 15px;
  color: #4e5052;
}
.health-workers .social {
  width: 100%;
  padding: 0;
  margin: 0;
  background: #1785eb;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease os;
}
.health-workers:hover .social {
  bottom: 0;
}
.health-workers .social li {
  display: inline-block;
}
.health-workers .social li a {
  text-decoration: none;
  display: block;
  padding: 10px;
  font-size: 17px;
  color: #ffff;
  transition: all 0.3s ease 0s;
}
.health-workers .social li a:hover {
  color: #1785eb;
  background: #f7f5ec;
}
@media (max-width: 720px) {
  .health-workers-div {
    flex-direction: column;
  }
  .health-workers {
    width: 80%;
    margin-top: 30px;
  }
}
</style>