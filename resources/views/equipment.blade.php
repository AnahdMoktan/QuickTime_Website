<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipment</title>
    @include('Client.metacss')
    <style>
        .container {
  position: relative;
  text-align: center;
 
}

.centered {
  position: relative;
  top: 100%;
  /* left: 50%;
  transform: translate(-50%, -50%); */
}
    </style>
</head>
<body>
    @include('Client.header')
    <section>
        <div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url('assets/img/about/about.jpg');
    width: 100%; height: 300px; background-repeat:no-repeat;background-size:cover;">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Equipments</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">About Us</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Equipments</li>
                        </ol>
                      </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

    <section id="scroll" style="padding-top: 25px; padding-left: 16px;">

        <div class="row">
            <div class="col-md-6">
            <img src="assets/img/equipments/equipment1.jpg" alt="" style="width: 100%"; height="570px;">   
                
            </div>
            <div class="col-md-6">
                <h5 style="font-size:25px; font-weight: bold;">About this Equipments:</h5><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reiciendis 
                    excepturi voluptatibus optio praesentium dolor, nemo consequatur quisquam soluta
                     officia velit nisi hic cupiditate pariatur. Voluptatum, accusamus eligendi 
                     maxime pariatur dicta repudiandae voluptas earum, dolore nemo natus iure magni,
                      unde iusto facilis sequi in rem. Totam quas at provident incidunt!</p>
            </div>
        </div>
    </section>
    <section style="padding-top: 25px; padding-left: 16px;">

        <div class="row">
            <div class="col-md-6">
                <h5  style="font-size:25px; font-weight: bold;">About this Equipments:</h5><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reiciendis 
                    excepturi voluptatibus optio praesentium dolor, nemo consequatur quisquam soluta
                     officia velit nisi hic cupiditate pariatur. Voluptatum, accusamus eligendi 
                     maxime pariatur dicta repudiandae voluptas earum, dolore nemo natus iure magni,
                      unde iusto facilis sequi in rem. Totam quas at provident incidunt!</p>
            </div>
            <div class="col-md-6">
            <img src="assets/img/equipments/equipment2.jpg" alt="" style="width: 100%"; height="570px;">   
                
            </div>
        </div>
    </section>
    <section style="padding-top: 25px; padding-left: 16px;">

        <div class="row">
            <div class="col-md-6">
            <img src="assets/img/equipments/equipment3.jpg" alt="" style="width: 100%"; height="570px;">   
                
            </div>
            <div class="col-md-6">
                <h5  style="font-size:25px; font-weight: bold;">About this Equipments:</h5><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reiciendis 
                    excepturi voluptatibus optio praesentium dolor, nemo consequatur quisquam soluta
                     officia velit nisi hic cupiditate pariatur. Voluptatum, accusamus eligendi 
                     maxime pariatur dicta repudiandae voluptas earum, dolore nemo natus iure magni,
                      unde iusto facilis sequi in rem. Totam quas at provident incidunt!</p>
            </div>
        </div>
    </section>
    <section style="padding-top: 25px; padding-left: 16px;">

        <div class="row">
            <div class="col-md-6">
                <h5  style="font-size:25px; font-weight: bold;">About this Equipments:</h5><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reiciendis 
                    excepturi voluptatibus optio praesentium dolor, nemo consequatur quisquam soluta
                     officia velit nisi hic cupiditate pariatur. Voluptatum, accusamus eligendi 
                     maxime pariatur dicta repudiandae voluptas earum, dolore nemo natus iure magni,
                      unde iusto facilis sequi in rem. Totam quas at provident incidunt!</p>
            </div>
            <div class="col-md-6">
            <img src="assets/img/equipments/equipment4.jpg" alt="" style="width: 100%"; height="570px;">   
                
            </div>
        </div>
    </section>
    
    <section style="padding-top: 25px;">

    @include('Client.footer')
    </section>
    @include('Client.metajs')
</body>
</html>

