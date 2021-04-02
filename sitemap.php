<?php
    include("functions/conf.php");

    $sql = "SELECT * FROM blog";
    $result = $conn->query($sql);
?>

<?php header('content-type: application/xml; charset="ISO-8859-1"',true); ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<?php while($row = $result->fetch_assoc()){?>

    <url>
        <loc><?php echo 'https://vcmkcybersec.tech/'.$row["post"];?></loc>
        <changefreq>yearly</changefreq>
        <priority>0.7</priority>
    </url>

<?php } ?>

<?php
$conn->close();
?>

</urlset>