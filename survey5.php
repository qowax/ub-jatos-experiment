<?php
session_start();

include('head.inc');
?>

		<div class="container-sm">
			<div class="card mx-auto">
  			<div class="card-body">
    			<h5 class="card-title text-center">Merci d'avoir participé à la phase finale de l'expérience « <?php echo($nom_experience); ?> »</h5>
    			<h6 class="card-subtitle mt-4 mb-4" align="justify">Juste avant de terminer nous avons quelques questions rapides sur votre manière d’apprendre habituellement. Merci de répondre le plus spontanément et le plus honnêtement possible. Il n’y a pas de bonne ou de mauvaise réponse.</h6>
    			<form action="php/questionnairePhase2.php" method="post" class="needs-validation" novalidate>

            <div class="row mb-2">
              <label align="justify"><u>Quand vous apprenez du vocabulaire, dans quel sens avez-vous plutôt l’habitude de l’apprendre ?</u></label>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="habitudesApprentissageRadio" id="apprentissage1" value="Langue maternelle vers étrangere" required>
              </div>
              <div class="col">
                <label for="habitudesApprentissage1" align="justify">J’essaie d’apprendre la traduction en partant de ma langue maternelle vers la langue étrangère</label>
              </div>
            </div>

    				<div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="habitudesApprentissageRadio" id="apprentissage2" value="Langue étrangère vers maternelle" required>
              </div>
              
              <div class="col">
                <label for="habitudesApprentissage2" align="justify">J’essaie d’apprendre la traduction en partant de la langue étrangère vers ma langue maternelle</label>
              </div>
  					</div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="habitudesApprentissageRadio" id="apprentissage3" value="Les deux sens (maternelle/étrangère et inversement)" required>
              </div>
              
              <div class="col">
                <label for="habitudesApprentissage3" align="justify">Les deux</label>
              </div>
            </div>

            <div class="row mb-2">
              <label align="justify" style="margin-top:30px;"><u>Quand vous apprenez, utilisez-vous la méthode des tests (=  réaliser des tests d'auto-évaluation ou des exercices sur les contenus à apprendre) ?</u></label>
            </div>

            <div class="row mb-2 radio">
              <div class="col form-inline">
                <input class="form-check-input radiocheck" type="radio" name="methodeDesTests" id="methodeDesTestsOui" value="Oui" required>
                <label class="form-check-label" for="methodeDesTestsOui">Oui</label>
                <input class="form-check-input radiocheck" type="radio" name="methodeDesTests" id="methodeDesTestsNon" value="Non" required>
                <label class="form-check-label" for="methodeDesTestsNon">Non</label>
              </div>
            </div>

            <div class="Oui msg">
              <div class="row mb-2">
                <label align="justify" style="margin-top:30px;"><u>À quelle fréquence utilisez-vous la méthode des tests sur une échelle de 5 points allant de 1 = « Jamais » à 5 = « Toujours » :</u></label>
              </div>
              <div class="row mb-2">
                <div class="col form-inline">
                  <input class="form-check-input radiocheck" type="radio" name="frequence" id="frequence1" value="1">
                  <label style="margin-right:10px;">Jamais</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="frequence" id="frequence2" value="2">
                  <label style="margin-right:10px;">Rarement</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="frequence" id="frequence3" value="3">
                  <label style="margin-right:10px;">Quelques fois</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="frequence" id="frequence4" value="4">
                  <label style="margin-right:10px;">Souvent</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="frequence" id="frequence5" value="5">
                  <label style="margin-right:10px;">Toujours</label>
                  
                </div>
              </div>

              <div class="row mb-2">
              <label align="justify" style="margin-top:30px;"><u>Quand vous vous testez, pourquoi le faites-vous ?</u></label>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="habitudesApprentissageCheck" id="pourquoi1" value="Cela me permet d'apprendre">
              </div>
              <div class="col">
                <label for="pourquoi1" align="justify">Cela me permet d’apprendre</label>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="habitudesApprentissageCheck" id="pourquoi2" value="Déterminer ce que je sais et ne sais pas">
              </div>
              
              <div class="col">
                <label for="pourquoi2" align="justify">Cela me permet de déterminer ce que je sais et ce que je ne sais pas encore </label>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="habitudesApprentissageCheck" id="pourquoi3" value="Les deux">
              </div>
              
              <div class="col">
                <label for="pourquoi3" align="justify">Les deux</label>
              </div>
            </div>

              

            <div class="row mb-2">
                <label align="justify" style="margin-top:30px;"><u>Pour vous tester, utilisez-vous un matériel particulier (cartes mémoire/flashcards, logiciels/applications, etc...) ?</u></label>
              </div>

              <div class="row mb-2 radio">
                <div class="col form-inline">
                  <input class="form-check-input radiocheck" type="radio" name="materielParticulier" id="materielParticulierOui" value="OUi" required>
                  <label class="form-check-label" for="materielParticulierOui">Oui</label>
                  <input class="form-check-input radiocheck" type="radio" name="materielParticulier" id="materielParticulierNon" value="NOn" required>
                  <label class="form-check-label" for="materielParticulierNon">Non</label>
                </div>
              </div>

              <div class="OUi materiel">




                <div class="row mb-2">
                  <label align="justify" style="margin-top:30px;"><u>À quelle fréquence ?</u></label>
                </div>
                <div class="col form-inline">
                    <input class="form-check-input radiocheck" type="radio" name="materielFrequence" id="materielFrequence1" value="1">
                    <label style="margin-right:10px;">Jamais</label>
                    
                    <input class="form-check-input radiocheck" type="radio" name="materielFrequence" id="materielFrequence2" value="2">
                    <label style="margin-right:10px;">Rarement</label>
                    
                    <input class="form-check-input radiocheck" type="radio" name="materielFrequence" id="materielFrequence3" value="3">
                    <label style="margin-right:10px;">Quelques fois</label>
                    
                    <input class="form-check-input radiocheck" type="radio" name="materielFrequence" id="materielFrequence4" value="4">
                    <label style="margin-right:10px;">Souvent</label>
                    
                    <input class="form-check-input radiocheck" type="radio" name="materielFrequence" id="materielFrequence5" value="5">
                    <label style="margin-right:10px;">Toujours</label>
                    
                </div>


                <div class="row mt-2 mb-2">
                    <div class="col-sm form-inline">
                      <label class="col-form-label align-middle" for="typeMaterielParticulier" style="margin-top:30px;">Vous pouvez préciser le type de matériel :</label>
                    </div>
                    <div class="col-sm form-inline">
                      <input type="text" class="form-control" placeholder="Appli, carte mémoire, ..." name="typeMaterielParticulier"  style="margin-top:30px;">
                    </div>
                </div>







                </div>

              
              </div>

              <div class="row mb-2">
                <label align="justify" style="margin-top:30px;"><u>Selon vous, la méthode des tests est-elle efficace ou non sur une échelle de 5 points allant de 1 = « Pas du tout » à 5 = « Très efficace » :</u></label>
              </div>
              <div class="col form-inline">
                  <input class="form-check-input radiocheck" type="radio" name="efficace" id="efficace1" value="1" required>
                  <label style="margin-right:10px;">Pas du tout</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="efficace" id="efficace2" value="2" required>
                  <label style="margin-right:10px;">Peu efficace</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="efficace" id="efficace3" value="3" required>
                  <label style="margin-right:10px;">Moyennement</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="efficace" id="efficace4" value="4" required>
                  <label style="margin-right:10px;">Efficace</label>
                  
                  <input class="form-check-input radiocheck" type="radio" name="efficace" id="efficace5" value="5" required>
                  <label style="margin-right:10px;">Très efficace</label>
                  
                </div>

              

                

                <div class="row mb-2">
              <label align="justify" style="margin-top:30px;"><u>Selon vous, l’affirmation « on retient mieux le vocabulaire quand il est appris dans les deux sens (langue maternelle vers langue étrangère et inversement) » est :</u></label>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="affirmationRadio" id="affirmation1" value="Vraie" required>
              </div>
              <div class="col">
                <label for="affirmation1" align="justify">Vraie</label>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="affirmationRadio" id="affirmation2" value="Fausse" required>
              </div>
              
              <div class="col">
                <label for="affirmation2" align="justify">Fausse</label>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="affirmationRadio" id="affirmation3" value="Pas d'avis" required>
              </div>
              
              <div class="col">
                <label for="affirmation3" align="justify">Je n'ai pas d'avis</label>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-1">
                <input class="form-check-input radiocheck" type="radio" name="affirmationRadio" id="affirmation4" value="Ça dépend" required>
              </div>
              
              <div class="col">
                <label for="affirmation4" align="justify">Ça dépend</label>
              </div>

            </div>
              </div>
            </div>
            
  					<div class="envoyer mt-4" style="margin-bottom: 200px;">
  						<button class="btn btn-primary" type="submit">Suivant</button>
  					</div>
  				</form>
  			</div>
			</div>
		</div>

    <script src="js/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
      $(function() {
        var $radios = $('input:radio[name=methodeDesTests]');
        if($radios.is(':checked') === false) {
          $radios.filter('[value=Non]').prop('checked', true);
          var target = $(".non");
          $(".msg").not(target).hide();
          $(target).show();
        }
      });

      $(function() {
        var $radios = $('input:radio[name=materielParticulier]');
        if($radios.is(':checked') === false) {
          $radios.filter('[value=NOn]').prop('checked', true);
          var target = $(".NOn");
          $(".materiel").not(target).hide();
          $(target).show();
        }
      });

      $(document).ready(function(){
        $('input[type="radio"][name="methodeDesTests"]').click(function(){
          var val = $(this).attr("value");
          var target = $("." + val);
          $(".msg").not(target).hide();
          $(target).show();
        });
      });

      $(document).ready(function(){
        $('input[type="radio"][name="materielParticulier"]').click(function(){
          var val = $(this).attr("value");
          var target = $("." + val);
          $(".materiel").not(target).hide();
          $(target).show();
        });
      });
    </script>

    <script src="js/survey.js"></script>

<?php include('foot.inc'); ?>