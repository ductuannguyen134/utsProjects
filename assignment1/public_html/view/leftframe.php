<!DOCTYPE html>
<html>
<head>
    <title>Left Frame</title>
    <script language="javascript">
        function displaygraphic(option) {
            var frozenf = document.getElementById('fz');
            var freshf = document.getElementById('ff');
            var beverage = document.getElementById('b');
            var homehealth = document.getElementById('h');
            var petfood = document.getElementById('pf');

            frozenf.style.zindex = 0;
            freshf.style.zindex = 0;
            beverage.style.zindex = 0;
            homehealth.style.zindex = 0;
            petfood.style.zindex = 0;

            frozenf.style.visibility = "hidden";
            freshf.style.visibility = "hidden";
            beverage.style.visibility = "hidden";
            homehealth.style.visibility = "hidden";
            petfood.style.visibility = "hidden";


            if (option == 1) {
                frozenf.style.zindex = 5;
                frozenf.style.visibility = "visible";
            }
            if (option == 2) {
                freshf.style.zindex = 5;
                freshf.style.visibility = "visible";
            }
            if (option == 3) {
                beverage.style.zindex = 5;
                beverage.style.visibility = "visible";
            }
            if (option == 4) {
                homehealth.style.zindex = 5;
                homehealth.style.visibility = "visible";
            }
            if (option == 5) {
                petfood.style.zindex = 5;
                petfood.style.visibility = "visible";
            }
        }

    </script>
</head>
<body style="background-color: cyan">

<img id="categories" src="../images/categories.PNG" border="0" width="535" height="191" orgWidth="535" orgHeight="191"
     usemap="#map1" alt=""/>
<map name="map1" id="map1">
    <area id="frozen" onmouseover="displaygraphic(1);return true" alt="frozen" title="frozen" shape="rect"
          coords="8,150,96,191" style="outline:none;"
          target="_self"/>
    <area id="fresh" onmouseover="displaygraphic(2);return true" alt="fresh" title="fresh" shape="rect"
          coords="109,149,197,190" style="outline:none;"
          target="_self"/>
    <area id="bev" onmouseover="displaygraphic(3);return true" alt="bev" title="bev" shape="rect"
          coords="208,150,299,191" style="outline:none;" target="_self"/>
    <area id="hh" onmouseover="displaygraphic(4);return true" alt="hh" title="hh" shape="rect" coords="312,147,403,191"
          style="outline:none;" target="_self"/>
    <area id="pet" onmouseover="displaygraphic(5);return true" alt="pet" title="pet" shape="rect"
          coords="416,152,501,191" style="outline:none;" target="_self"/>
    <area shape="rect" coords="533,189,535,191" alt="Image Map" style="outline:none;" title="Image Map"/>
</map>

<img src="../images/frozenfood.PNG" id="fz" style="z-index: 0;
     	position: relative; top: -5px; visibility: hidden" usemap="#map2">
<map name="map2" id="map2">
    <area id="1002" href="../controller/show_products.php?product_id=1002" target="toprightframe" alt="ham" title="ham" shape="rect" coords="7,139,95,186"
          style="outline:none;" target="_self"/>
    <area id="fish" alt="fish" title="fish" shape="rect" coords="104,140,197,188"
          style="outline:none;" target="_self"/>
    <area id="1003"  href="../controller/show_products.php?product_id=1003" target="toprightframe" alt="prawn" title="prawn" shape="rect" coords="214,143,307,191"
          style="outline:none;" target="_self"/>
    <area id="ic" alt="ic" title="ic" shape="rect" coords="317,142,410,190"
          style="outline:none;" target="_self"/>
    <area id="1000"  href="../controller/show_products.php?product_id=1000" target="toprightframe" alt="500" title="500" shape="rect" coords="68,269,161,317"
          style="outline:none;" target="_self"/>
    <area id="1001"  href="../controller/show_products.php?product_id=1001" target="toprightframe" alt="1k" title="1k" shape="rect" coords="166,265,259,313"
          style="outline:none;" target="_self"/>
    <area id="1004"  href="../controller/show_products.php?product_id=1004" target="toprightframe" alt="1l" title="1l" shape="rect" coords="270,264,363,312"
          style="outline:none;" target="_self"/>
    <area id="1005"  href="../controller/show_products.php?product_id=1005" target="toprightframe" alt="2l" title="2l" shape="rect" coords="373,264,466,312"
          style="outline:none;" target="_self"/>
    <area shape="rect" coords="535,366,537,368" alt="Image Map" style="outline:none;" title="Image Map"/>
</map>

<img src="../images/freshfood.PNG" id="ff" style="z-index: 0;
     	position: relative; top: -376px; visibility: hidden" usemap="#map3">
<map name="map3" id="map3">
    <area id="3002"  href="../controller/show_products.php?product_id=3002" target="toprightframe" alt="tbone" title="tbone" shape="rect" coords="3,139,75,186" style="outline:none;" target="_self"/>
    <area id="cheddar" alt="cheddar" title="cheddar" shape="rect" coords="75,139,147,186" style="outline:none;"
          target="_self"/>
    <area id="3003"  href="../controller/show_products.php?product_id=3003" target="toprightframe" alt="orange" title="orange" shape="rect" coords="151,135,223,182" style="outline:none;"
          target="_self" data-maphilight='orange'/>
    <area id="3004"  href="../controller/show_products.php?product_id=3004" target="toprightframe" alt="banana" title="banana" shape="rect" coords="226,140,298,187" style="outline:none;"
          target="_self"/>
    <area id="3006"  href="../controller/show_products.php?product_id=3006" target="toprightframe" alt="grapes" title="grapes" shape="rect" coords="298,139,370,186" style="outline:none;"
          target="_self"/>
    <area id="3007"  href="../controller/show_products.php?product_id=3007" target="toprightframe" alt="apples" title="apples" shape="rect" coords="374,138,446,185" style="outline:none;"
          target="_self"/>
    <area id="3005"  href="../controller/show_products.php?product_id=3005" target="toprightframe" alt="peach" title="peach" shape="rect" coords="448,140,514,184" style="outline:none;"
          target="_self"/>
    <area id="3000"  href="../controller/show_products.php?product_id=3000" target="toprightframe" alt="small_ched" title="small_ched" shape="rect" coords="33,267,123,311" style="outline:none;"
          target="_self"/>
    <area id="3001"  href="../controller/show_products.php?product_id=3001" target="toprightframe" alt="large_ched" title="large_ched" shape="rect" coords="138,269,228,313"
          style="outline:none;" target="_self"/>
    <area shape="rect" coords="534,363,536,365" alt="Image Map" style="outline:none;" title="Image Map"/>
</map>

<img src="../images/beverages.PNG" id="b" style="z-index: 0;
     	position: relative; top: -745px; visibility: hidden" usemap="#map4">
<map name="map4" id="map4">
    <area id="coffee" alt="coffee" title="coffee" shape="rect" coords="48,144,142,190" style="outline:none;"
          target="_self"/>
    <area id="earlgrey" alt="earlgrey" title="earlgrey" shape="rect" coords="237,146,331,192" style="outline:none;"
          target="_self"/>
    <area id="4005"  href="../controller/show_products.php?product_id=4005" target="toprightframe" alt="choc" title="choc" shape="rect" coords="421,149,512,190" style="outline:none;" target="_self"/>
    <area id="4003"  href="../controller/show_products.php?product_id=4003" target="toprightframe" alt="small_cof" title="small_cof" shape="rect" coords="20,265,92,306" style="outline:none;"
          target="_self"/>
    <area id="4004"  href="../controller/show_products.php?product_id=4004" target="toprightframe" alt="large_cof" title="large_cof" shape="rect" coords="95,262,167,303" style="outline:none;"
          target="_self"/>
    <area id="4000"  href="../controller/show_products.php?product_id=4000" target="toprightframe" alt="minpack" title="minpack" shape="rect" coords="171,263,243,304" style="outline:none;"
          target="_self"/>
    <area id="4001"  href="../controller/show_products.php?product_id=4001" target="toprightframe" alt="medpack" title="medpack" shape="rect" coords="244,262,316,303" style="outline:none;"
          target="_self"/>
    <area id="4002"  href="../controller/show_products.php?product_id=4002" target="toprightframe" alt="bigpack" title="bigpack" shape="rect" coords="319,263,391,304" style="outline:none;"
          target="_self"/>
    <area shape="rect" coords="535,362,537,364" alt="Image Map" style="outline:none;" title="Image Map"/>
</map>

<img src="../images/homehealth.PNG" id="h" style="z-index: 0;
     	position: relative; top: -1114px; visibility: hidden" usemap="#map5">
<map name="map5" id="map5">
    <area id="2002"  href="../controller/show_products.php?product_id=2002" target="toprightframe" alt="soap" title="soap" shape="rect" coords="5,140,96,185" style="outline:none;" target="_self"/>
    <area id="panadol" alt="pan" title="pan" shape="rect" coords="107,142,198,187" style="outline:none;" target="_self"/>
    <area id="2005"  href="../controller/show_products.php?product_id=2005" target="toprightframe" alt="wash" title="wash" shape="rect" coords="208,140,299,185" style="outline:none;" target="_self"/>
    <area id="garbage" alt="garbage" title="garbage" shape="rect" coords="312,140,403,185" style="outline:none;"
          target="_self"/>
    <area id="2006"  href="../controller/show_products.php?product_id=2006" target="toprightframe" alt="bleach" title="bleach" shape="rect" coords="413,140,504,185" style="outline:none;"
          target="_self"/>
    <area id="2000"  href="../controller/show_products.php?product_id=2000" target="toprightframe" alt="smallpan" title="smallpan" shape="rect" coords="63,266,154,311" style="outline:none;"
          target="_self"/>
    <area id="2001"  href="../controller/show_products.php?product_id=2001" target="toprightframe" alt="bigpan" title="bigpan" shape="rect" coords="165,266,256,311" style="outline:none;"
          target="_self"/>
    <area id="2003"  href="../controller/show_products.php?product_id=2003" target="toprightframe" alt="smallgar" title="smallgar" shape="rect" coords="271,269,362,314" style="outline:none;"
          target="_self"/>
    <area id="2004"  href="../controller/show_products.php?product_id=2004" target="toprightframe" alt="largegar" title="largegar" shape="rect" coords="374,267,465,312" style="outline:none;"
          target="_self"/>
    <area shape="rect" coords="531,366,533,368" alt="Image Map" style="outline:none;" title="Image Map"/>
</map>


<img src="../images/petfood.PNG" id="pf" style="z-index: 0;
     	position: relative; top: -1485px; visibility: hidden" usemap="#map6">
<map name="map6" id="map6">
    <area id="5002"  href="../controller/show_products.php?product_id=5002" target="toprightframe" alt="bird" title="bird" shape="rect" coords="113,134,202,187" style="outline:none;" target="_self"/>
    <area id="5003"  href="../controller/show_products.php?product_id=5003" target="toprightframe" alt="cat" title="cat" coords="212,134,301,187" style="outline:none;" target="_self"/>
    <area id="drydog" alt="drydog" title="drydog" shape="rect" coords="315,134,404,187" style="outline:none;"
          target="_self"/>
    <area id="5004"  href="../controller/show_products.php?product_id=5004" target="toprightframe" alt="fishfood" title="fishfood" shape="rect" coords="420,134,509,187" style="outline:none;"
          target="_self"/>
    <area id="5000"  href="../controller/show_products.php?product_id=5000" target="toprightframe" alt="smalldog" title="smalldog" shape="rect" coords="271,263,360,316" style="outline:none;"
          target="_self"/>
    <area id="5001"  href="../controller/show_products.php?product_id=5001" target="toprightframe" alt="bigdog" title="bigdog" shape="rect" coords="376,262,465,315" style="outline:none;"
          target="_self"/>
    <area shape="rect" coords="539,362,541,364" alt="Image Map" style="outline:none;" title="Image Map"/>
</map>

</body>
</html>