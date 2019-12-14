        <div class="owl-carousel">    
            <?  
                $aud = get_auditories_lec();
                foreach ($aud as $auditory): ?>
                    <div class="lecture-class">
                        <h3 class="lecture__num"><? echo $auditory["number"]; ?></h3>
                        <div class="time">
                            <span class="lecture__cump"><? echo $auditory["campus"]; ?></span>
                        </div>
                        <button class="type__reserv-button classtype__button-choise">Select</button>
                    </div>
                
            <? endforeach; ?>
        </div>