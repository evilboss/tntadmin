<form action="/items/add" method="post">

    <section class="content-header">
        <h1>
            Edit Item
            <small>( Take a look at all of your Items )</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Items</li>

        </ol>
        <input type="submit" value="Save"/>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row app-container">
            <div class="col-md-12">
                <div class="well">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box-header with-border">
                                <input class="form-check-input" type="hidden" id="images" name="images">

                                <input class="form-check-input" type="checkbox" id="WebItem" name="WebItem">
                                <label class="form-check-label" for="WebItem">
                                    WebItem
                                </label>
                                <input class="form-check-label" type="checkbox" id="Services" name="Services">
                                <label class="form-check-label" for="Services">
                                    Services
                                </label>
                                <input class="form-check-label" type="checkbox" id="InActive">
                                <label class="form-check-label" for="Services">
                                    In-Active
                                </label>
                                <input class="form-check-input" type="checkbox" id="InActive">
                                <label class="form-check-label" for="InActive">
                                    InActive
                                </label>
                                <input class="form-check-label" type="checkbox" id="Recommended">
                                <label class="form-check-label" for="Recommended">
                                    Recommended
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Item Code</label>
                                <input id="ItemCode" name="ItemCode" class="form-control" type="text">

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input id="Description" name="Description" class="form-control" type="text">

                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <select name="Brand" class="form-control" value="">
                                    <option value="214">Beast Kingdom</option>
                                    <option value="210">Bowen Designs</option>
                                    <option value="206">Coolprops</option>
                                    <option value="35">Diamond Select Toys</option>
                                    <option value="208">Gentle Giant</option>
                                    <option value="218">Hollywood Collectibles Group</option>
                                    <option value="216">Horizon</option>
                                    <option value="200">Hotwheels</option>
                                    <option value="204">Imaginarium Art</option>
                                    <option value="197">Kid Robot</option>
                                    <option value="11">Mezco</option>
                                    <option value="9">Neca</option>
                                    <option value="207">Quantum Mechanix</option>
                                    <option value="32">Sideshow Collectibles</option>
                                    <option value="209">Spades Collectibles</option>
                                    <option value="212">Toyntoys</option>
                                    <option value="211">Weta</option>
                                    <option value="215">Weta/Sideshow</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product Type</label>
                                <select name="Department" class="form-control" id="Department">
                                    <option value="4">1/6 Figures</option>
                                    <option value="12">Accessories</option>
                                    <option value="3">Action Figures</option>
                                    <option value="17">Books and Magazine</option>
                                    <option value="5">Candy Toy</option>
                                    <option value="7">Capsule Toys</option>
                                    <option value="16">Designer Toys</option>
                                    <option value="22">Environmental</option>
                                    <option value="14">Head &amp; Body Knockers</option>
                                    <option value="11">Japanese/American Figures</option>
                                    <option value="10">Life Size</option>
                                    <option value="20">Living Dead Dolls</option>
                                    <option value="23">Mini Epics</option>
                                    <option value="2">Model Kit</option>
                                    <option value="15">Plush</option>
                                    <option value="24">PVC Statues</option>
                                    <option value="21">Q-Fig</option>
                                    <option value="18">Replica and Prop</option>
                                    <option value="9">Robots</option>
                                    <option value="13">Space Ship</option>
                                    <option value="8">Statues</option>
                                    <option value="6">Trading Figures</option>
                                    <option value="19">Vehicle Models</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select id="Category" name="Category" class="form-control" value="">
                                    <option value="5">Aliens</option>
                                    <option value="40">American Gods</option>
                                    <option value="10">Ash vs Evil Dead</option>
                                    <option value="87">Back to the Future</option>
                                    <option value="14">Batman</option>
                                    <option value="34">Blade Runner</option>
                                    <option value="75">Borderlands</option>
                                    <option value="70">Candyman</option>
                                    <option value="47">Caroline</option>
                                    <option value="68">Castlevania</option>
                                    <option value="21">Childs Play</option>
                                    <option value="37">Clockwork Orange</option>
                                    <option value="82">Conan The Barbarian</option>
                                    <option value="38">Crash Bandicoot</option>
                                    <option value="77">Creepshow</option>
                                    <option value="29">Customised/Designer</option>
                                    <option value="74">Dancouga</option>
                                    <option value="13">DC</option>
                                    <option value="55">Dinosaurs</option>
                                    <option value="33">Disney Pixar</option>
                                    <option value="24">E.T.</option>
                                    <option value="42">Excorist</option>
                                    <option value="3">Friday the 13th</option>
                                    <option value="36">GDT Signature Collection</option>
                                    <option value="30">Getter Robot</option>
                                    <option value="12">Ghostbusters</option>
                                    <option value="81">Giant Robo</option>
                                    <option value="35">God of War</option>
                                    <option value="17">Godzilla</option>
                                    <option value="11">Gremlins</option>
                                    <option value="25">Halloween</option>
                                    <option value="48">Harry Porter</option>
                                    <option value="85">Hatchet</option>
                                    <option value="65">Hellboy</option>
                                    <option value="88">Hello Kitty</option>
                                    <option value="76">Hellraiser</option>
                                    <option value="22">Heroes of the Storm</option>
                                    <option value="26">Hitman</option>
                                    <option value="86">Hobbits</option>
                                    <option value="50">I.T.</option>
                                    <option value="51">Iron Maiden</option>
                                    <option value="84">Jaws</option>
                                    <option value="19">Justice League</option>
                                    <option value="45">Karate Kid</option>
                                    <option value="44">King Kong</option>
                                    <option value="63">Leatherface</option>
                                    <option value="32">Living Dead Dolls</option>
                                    <option value="78">Lord of Tears</option>
                                    <option value="54">Lord of the Ring</option>
                                    <option value="6">Marvel Comics</option>
                                    <option value="7">Marvel Studios</option>
                                    <option value="71">Mazinkaiser SKL</option>
                                    <option value="56">Musical/Celebrity Figures</option>
                                    <option value="2">Nightmare on Elm Street</option>
                                    <option value="18">Other</option>
                                    <option value="89">Pac-man</option>
                                    <option value="9">Pacific Rim</option>
                                    <option value="46">Pan's Labyrinth</option>
                                    <option value="72">Planet of the Apes</option>
                                    <option value="80">Popeye The Sailorman</option>
                                    <option value="4">Predator</option>
                                    <option value="39">Re-Animator</option>
                                    <option value="61">Reptiles</option>
                                    <option value="8">Robocop</option>
                                    <option value="31">Rocky</option>
                                    <option value="73">SAW</option>
                                    <option value="83">Scream</option>
                                    <option value="41">Silent Night, Deadly Night</option>
                                    <option value="16">Simpsons</option>
                                    <option value="53">Spyro the Dragon</option>
                                    <option value="43">Star Wars</option>
                                    <option value="64">Street Fighter</option>
                                    <option value="67">Teenage Mutant Ninja Turtles</option>
                                    <option value="15">Terminator</option>
                                    <option value="20">Texas Chainsaw Massacre</option>
                                    <option value="69">The Conjuring</option>
                                    <option value="79">The Crow</option>
                                    <option value="60">The Goonies</option>
                                    <option value="52">The Nun</option>
                                    <option value="57">The Shining</option>
                                    <option value="59">They Live</option>
                                    <option value="27">Titanfall</option>
                                    <option value="1">Transformers G1</option>
                                    <option value="58">Trick R Treat</option>
                                    <option value="28">Valerian</option>
                                    <option value="62">Van Helsing</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Item Weight</label>
                                <input class="form-control" name="ItemWeight" id="ItemWeight" type="number">
                            </div>
                            <div class="form-group">
                                <label>Pcs. Per Carton</label>
                                <input name="PcsPerCarton" class="form-control" id="PcsPerCarton" type="number">
                            </div>
                            <div class="form-group">
                                <label>Inventory Qty</label>
                                <input name="Inventory_Qty" class="form-control" id="Inventory_Qty" type="number">
                            </div>


                        </div>
                        <div class="col-lg-4">
                            <div class="box-header with-border">
                                Pre Order
                            </div>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="box-header with-border">
                                Special Offer
                            </div>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <?php if (isset($item['images']))
                            $imageArray = json_decode($item['images'], true);
                        //print_r($imageArray);
                        foreach ($imageArray as $key => $images) {
                            foreach ($images as $image) {
                                echo "<img src='$image'/>";
                            }

                        }


                        ?>
                        <div class="wrapper">
                            <div class="sections">

                                <section class="active">
                                    <div class="images">
                                        <div class="pic">
                                            add
                                        </div>
                                    </div>


                                </section>

                            </div>
                        </div>
                        <div class="notification"></div>

                    </div>
                    <!--
                      -->
                    <pre><? print_r($item) ?></pre>

                </div>
            </div>
        </div>
    </section>
</form>
