<?php

$servername = 'localhost';
$username = 'root';
$password = 'Bestintheworld';
$dbname = 'Agora';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';

  // Insert Multiple Records
$sql = "INSERT INTO Business(businessName,businessEmail,businessPhone,businessInfo,userName,password,streetNumber,streetName,suburb,city,postcode,additionalLocations)
VALUES ('myBusiness', 'myEmail@email.com', 0123456789, 'myInfo', 'myBusiness', 'password', 1, 'myStreet', 'mysuburb', 'myCity', 0123, 'none'),
('Cras Vulputate Incorporated','et.magna@protonmail.edu','48112189','feugiat','Philip Leblanc','ZPG20POA9US',1,'Blandit Ave','Klerksdorp','Connacht','2465','903-1600 Nam Ave'),
('Morbi Metus Institute','at.auctor@hotmail.couk','80992128','Nunc sed orci lobortis','Owen Fuentes','WRU25VNH3RR',9,'Ornare St.','Pavlohrad','Namen','5169','439-993 Nunc Rd.'),
('Metus In PC','sed@google.edu','27970874','at fringilla','Jermaine Johnson','HOP51IPO7OQ',7,'Vestibulum Ave','Port Nolloth','Pernambuco','8917','P.O. Box 952, 7209 Eu Av.'),
('Imperdiet Dictum Foundation','mi@protonmail.org','96104537','sociis natoque penatibus et','Rinah Contreras','UOW92UZD5IX',5,'Sem Avenue','Ceuta','Gilgit Baltistan','7612','653-3472 Ut Avenue'),
('Quisque Ac Foundation','magna.nam.ligula@protonmail.edu','91645153','vel, faucibus id, libero.','Hakeem Randolph','ICT04BQL8NN',3,'AScelerisque Road','Lakeshore','Ilocos Region','0720','9371 Cum Av.'),
('Lectus Ante Dictum Institute','aliquam.erat@protonmail.com','65202452','nec metus facilisis lorem','Amela Burks','YVI13VLU6MX',6,'Gravida Rd.','Casalbuono','Opolskie','4741','Ap #149-1744 Enim St.'),
('Diam Luctus Lobortis Limited','pede@aol.org','22589322','Proin sed turpis nec mauris','Craig Love','LKA75QLO9ZU',10,'Justo Av.','Chernihiv','Sevastopol City','1447','P.O. Box 257, 8491 Sit Rd.'),
('Sed Facilisis PC','dignissim.pharetra@protonmail.com','78311083','non, feugiat nec, diam. Duis','Justine Peters','KSF11IRS4MT',4,'Sed, Av.','Yekaterinburg','Madrid','4592','P.O. Box 464, 7889 Lacinia. St.'),
('Non Magna Nam Corp.','posuere.enim.nisl@icloud.net','30088706','quis arcu vel quam','Berk James','WXS62IXR8ZU',2,'Fringilla Ave','Itajaí','Leinster','2192','588-4801 Cras Av.');";

$sql .= "INSERT INTO Account(accountType,active,businessID)
VALUES ('BSAdmin', True, 1),
('BSAdmin', True, 1),
('BSAdmin',True,3),
('Buyer',True,4),
('Buyer',False,5),
('Seller',False,10),
('Seller',True,10),
('Buyer',True,9),
('Buyer',True,8),
('Seller',True,5);";

$sql .= "INSERT INTO User(email,userName,fistName,lastName,password,dateOfBirth,role,location,admin,accountID)
VALUES ('myEmail@email.com', 'myUserName', 'Daniel', 'Wild', 'password','1996-3-29', 'IT', 'myStreet', False, 1),
('ipsum.donec@outlook.net','Yuri','Sheila','Oneal','LYY52QDQ4WE','1996-3-29','Quality Assurance','Nam Rd.',True,7),
('elit.elit@aol.ca','Malachi','Noah','Benton','FWO24FJH3JX','1996-3-29','Payroll','5 Ut, Road',False,4),
('sit.amet@aol.net','Kato','Marshall','Carson','UEC03NEP0TG','1996-3-29','Payroll','8 Auctor St.',True,9),
('ornare.lectus.justo@protonmail.org','Brenda','Joan','Merrill','DKI44RVH7PN','1996-3-29','Legal Department','15 Odio. Rd.',True,4),
('condimentum.donec@aol.com','Eugenia','Rogan','Fields','BOJ26BQW6LG','1996-3-29','Payroll','1 Dui, St.',True,4);";

$sql .= "INSERT INTO Listing(dateListed,closingDate,userID)
VALUES ('2022-3-29', '2022-8-05', 1),
 ('2023-01-22','2022-02-21',31),
  ('2022-07-06','2021-11-10',31),
  ('2022-07-15','2021-11-17',26),
  ('2022-09-17','2023-02-17',36),
  ('2022-03-10','2022-05-30',31),
  ('2022-10-15','2022-10-23',30),
  ('2023-01-11','2022-11-27',33),
  ('2022-05-04','2023-06-19',29),
  ('2021-12-12','2022-08-07',37),
  ('2022-07-31','2023-01-07',26),
  ('2023-01-28','2021-10-19',36),
  ('2023-08-04','2022-11-03',30),
  ('2022-04-21','2022-11-19',30),
  ('2023-06-14','2023-02-20',29),
  ('2022-11-15','2022-05-05',34),
   ('2023-08-05','2021-10-01',33),
  ('2023-06-10','2023-08-03',26),
  ('2023-02-25','2022-08-07',36),
  ('2021-11-03','2023-04-05',31),
  ('2022-03-19','2022-12-04',32),
  ('2022-01-21','2022-01-26',31),
  ('2022-12-07','2023-01-25',26),
  ('2022-09-16','2023-03-18',32),
  ('2023-07-23','2022-12-06',37),
  ('2022-09-06','2022-08-05',33);";

$sql .= "INSERT INTO Item(productName,category,startingPrice,buyNowPrice,imagePath,listingID)
VALUES ('myproduct', 'product', 1.00, 5.00, 'asdfhghjkl', 1),
('Cialis','cereals','1.73','1.95','http://netflix.com?q=test',8),
 ('Namenda','cereals','1.32','1.64','https://pinterest.com?search=1',25),
  ('Paroxetine HCl','pasta','1.44','2.08','https://ebay.com?str=se',10),
  ('Lantus Solostar','pasta','1.86','1.88','http://guardian.co.uk?q=0',38),
  ('Symbicort','sandwiches','2.46','1.85','http://cnn.com?q=test',23),
    ('Ibuprofen (Rx)','pies','1.93','1.81','https://bbc.co.uk?k=0',37),
  ('Alprazolam','noodles','1.79','2.19','https://instagram.com?str=se',21),
  ('Levothyroxine Sodium','pies','2.18','2.24','https://wikipedia.org?ab=441&aad=2',21),
  ('Omeprazole (Rx)','sandwiches','1.64','1.80','https://zoom.us?q=4',15),
  ('Amoxicillin','noodles','2.29','2.90','http://pinterest.com?q=11',38),
  ('Lyrica','desserts','1.84','1.46','http://zoom.us?page=1&offset=1',14),
  ('Levoxyl','cereals','1.68','1.86','http://yahoo.com?gi=100',24),
  ('Enalapril Maleate','stews','1.78','2.19','http://instagram.com?p=8',33),
  ('Actos','pasta','2.03','2.72','https://ebay.com?k=0',35),
  ('Zolpidem Tartrate','noodles','1.85','1.65','http://youtube.com?gi=100',19);";

if ($conn->multi_query($sql) === TRUE) {
  echo 'New records created successfully';
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

    
    $conn->close();
?>