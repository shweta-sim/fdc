<form class="booking-form" id="enquiryForm" onsubmit="return validateForm()" method="POST" action="mailer.php">
    <div class="row">
        <div class="col-sm-12 cols">
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-control field-req" placeholder="För & efternamn">
            </div>
        </div>
        <div class="col-sm-12 cols">
            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control field-req" placeholder="E-postadress">
            </div>
        </div>
        <div class="col-sm-12 cols">
            <div class="form-group">
                <input type="text" name="telephone" id="telephone" class="form-control field-req" placeholder="Telefonnummer">
            </div>
        </div>
        <div class="col-sm-12 cols">
            <div class="form-group">
                <select name="klinik" id="klinik" class="form-control field-req">
                    <option value="">Välj klinik</option>
                    <option value="Kungsholmen">Kungsholmen</option>
                    <option value="Specialistkliniken">Specialistkliniken</option>
                    <option value="Degerfors">Degerfors</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 cols">
            <div class="form-group">
                <select name="services" id="services" class="form-control field-req">
                    <option value="">Välj behandling</option>
                    <option value="Basundersökning">Basundersökning</option>
                    <option value="Akutundersökning">Akutundersökning</option>
                    <option value="Tandhygienistbesök/Rengöring">Tandhygienistbesök/Rengöring</option> 
                    <option value="Implantatkonsultation">Implantatkonsultation</option>
                                            
                    <!-- <option value="Fyllningar">Fyllningar</option>
                    <option value="Kronor och broar">Kronor och broar</option>
                    <option value="Tandimplantat">Tandimplantat</option>
                    <option value="Tandhygienist">Tandhygienist</option>
                    <option value="Rotbehandling">Rotbehandling</option>
                    <option value="Invisalign">Invisalign</option>
                    <option value="Fillers">Fillers</option> -->
                </select>
            </div>
        </div>
        <div class="col-sm-12 cols">
            <div class="form-group">
                <textarea name="comment" id="comment" class="form-control field-req" placeholder="Lämna ett meddelande och ev. önskemål om tid &amp; datum"></textarea> 
            </div>
        </div>
        <div class="col-md-12 text-center"><button type="submit" name="submit" id="send" class="btn btn-black">Skicka</button></div>
    </div>
</form>