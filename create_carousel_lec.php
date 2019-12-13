        <div class="owl-carousel">    
            <div class="lecture-class">
                <?  
                    $aud = get_auditories();
                    foreach ($aud as $auditory){
                        echo $auditory["Number"];
                    }
                ?>
                <h3 class="lecture__num">219</h3>
                <div class="time">
                    <span class="lecture__cump">Central</span>
                </div>
                <button class="type__reserv-button classtype__button-choise">Select</button>
            </div>
            
        </div>