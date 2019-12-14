   <div class="owl-carousel">    
            <?  
                $aud = get_auditories_prac();
                foreach ($aud as $auditory): ?>
                    <div class="practice-class">
                <h3 class="practice__num"><? echo $auditory["number"]; ?></h3>
                <div class="time">
                    <span class="practice__cump"><? echo $auditory["campus"]; ?></span>
                </div>
                <button class="type__reserv-button classtype__button-choise">Select</button>
            </div>
                
            <? endforeach; ?>
        </div>        
            




