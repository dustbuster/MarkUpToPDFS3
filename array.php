<?php
[
  "form_params" => [
    "filename" => "/Users/dhorning/Projects/API/storage/pdfs/chester-britzdtacny-10596-dev-2023-10-24-122251.pdf",
    "text" => '
      <!DOCTYPE html>\n
      \n
      <head>\n
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.css" rel="stylesheet">\n
          <link rel="preconnect" href="https://fonts.googleapis.com">\n
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>\n
          <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,100&display=swap" rel="stylesheet">\n
      \n
          <style>\n
          :root {\n
              --critical-concern: #cc0000;\n
              --to-watch: #bd9400;\n
              --normal: #007934;\n
          }\n
          body {\n
              font-family: 'Lato', sans-serif;\n
          }\n
          .container {\n
              display: block;\n
          }\n
          .title-image {\n
              width: 100%;\n
              height: auto;\n
              position: relative;\n
              top: -70px;\n
          }\n
          .overlay {\n
              background: linear-gradient(0deg, rgb(255, 255, 255, 1), 95%, rgb(255, 255, 255, 0));\n
              height: auto;\n
              position: relative;\n
              text-align: center;\n
              top: -280px;\n
          }\n
          .title-logo {\n
              width: 586px;\n
              height: 330px;\n
          }\n
          .title {\n
              color: #8347AD;\n
              font-size: 80px;\n
              font-weight: bold;\n
              margin-bottom: 40px;\n
          }\n
          .title-member {\n
              font-size: 50px;\n
              font-weight: bold;\n
              text-transform: capitalize;\n
          }\n
          .title-date {\n
              font-size: 24px;\n
          }\n
          .member-name {\n
              text-align: center;\n
              font-weight: bold;\n
              font-size: 30px;\n
              width: 100%;\n
          }\n
      \n
          .category-container {\n
              width: 100%;\n
              position: relative;\n
              margin-top: -75px;\n
          }\n
          .category {\n
              width: 100%;\n
              border-bottom: solid 1px #def2ff;\n
              padding-top: 25px;\n
              padding-bottom: 20px;\n
              display: flex;\n
              flex-direction: row;\n
              align-items: baseline;\n
              margin-left: 10px;\n
              width: 96%;\n
          }\n
          .category-name {\n
              font-size: 20px;\n
              text-align: right;\n
              font-weight: bold;\n
              color: #337ab7;\n
              width: 25%;\n
              margin-right: 25px;\n
          }\n
          .result-container {\n
              display: flex;\n
              flex-direction: row;\n
              flex-wrap: wrap;\n
          }\n
          .result-level {\n
              padding: 2px 15px;\n
              border-radius: 15px;\n
              text-shadow: 0 0 black;\n
          }\n
          .number {\n
              border-radius: 50%;\n
              height: 23px;\n
              width: 23px;\n
              text-align: center;\n
              color: white;\n
              position: relative;\n
              top: -11px;\n
              right: 17px;\n
          }\n
          .normal {\n
              border: solid 1px var(--normal);\n
              color: var(--normal);\n
          }\n
          .normal-number {\n
              background-color: var(--normal);\n
              border: solid 1px var(--normal);\n
      \n
          }\n
          .critical {\n
              border: solid 1px var(--critical-concern);\n
              background-color: var(--critical-concern);\n
              color: white;\n
          }\n
          .critical-number {\n
              border: solid 1px var(--critical-concern);\n
              color: var(--critical-concern);\n
              background-color: white;\n
          }\n
          .to-watch {\n
              border: solid 1px var(--to-watch);\n
              color: var(--to-watch);\n
          }\n
          .to-watch-number {\n
              background-color: var(--to-watch);\n
              border: solid 1px var(--to-watch);\n
          }\n
          .concern {\n
              border: solid 1px var(--critical-concern);\n
              color: var(--critical-concern);\n
          }\n
          .concern-number {\n
              background-color: var(--critical-concern);\n
              border: solid 1px var(--critical-concern);\n
          }\n
          .critical-icon {\n
              padding-right: 5px;\n
          }\n
          .biometrics-container {\n
              display: flex;\n
              flex-direction: row;\n
              flex-wrap: wrap;\n
              break-inside: avoid;\n
          }\n
          .biometric-results {\n
              width: 100%;\n
              border-bottom: solid 1px #def2ff;\n
              margin-top: 20px;\n
              display: inherit;\n
          }\n
          .biometric-card {\n
              border-radius: 10px;\n
              min-height: 110px;\n
              margin: 50px 20px 20px 20px;\n
              display: flex;\n
              flex-direction: row;\n
              flex-wrap: wrap;\n
              width: 50%;\n
          }\n
          .critical-concern-card {\n
              border: solid 4px var(--critical-concern);\n
          }\n
          .to-watch-card {\n
              border: solid 4px var(--to-watch);\n
          }\n
          .normal-card {\n
              border: solid 4px var(--normal);\n
          }\n
          .current-level {\n
              display: flex;\n
              flex-direction: row;\n
              align-items: right;\n
          }\n
          .biometric-level {\n
              padding: 3px 10px;\n
              border-radius: 15px;\n
              text-align: center;\n
              color: white;\n
              font-weight: bold;\n
              position: relative;\n
              top: -16px;\n
              left: 145%;\n
              width: 120px;\n
              height: 22px;\n
          }\n
          .biometric-details {\n
              position: relative;\n
              top: -11px;\n
              width: 100%;\n
              display: flex;\n
          }\n
          .current-biometric-result {\n
              text-align: center;\n
              margin-left: 30px;\n
          }\n
          .biometric-info {\n
              margin-left: 25px;\n
              margin-right: 5px;\n
          }\n
          .biometric-name {\n
              font-weight: bold;\n
              font-size: 18px;\n
              margin-top: 10px;\n
          }\n
      \n
          .tag-name {\n
              font-weight: bold;\n
              font-size: 18px;\n
          }\n
      \n
          .biometric-value {\n
              font-size: 38px;\n
              font-weight: bold;\n
              padding-right: 0;\n
              margin-top: 8px;\n
          }\n
          .critical-concern-color {\n
              color: var(--critical-concern);\n
          }\n
          .to-watch-color {\n
              color: var(--to-watch);\n
          }\n
          .normal-color {\n
              color: var(--normal);\n
          }\n
          .biometric-unit {\n
              color: #666;\n
              padding-right: 0;\n
              position: relative;\n
              top: -10px;\n
              margin-top: 5px;\n
          }\n
          .biometric-time {\n
              display: flex;\n
              flex-direction: row;\n
              align-items: baseline;\n
              margin-top: 10px;\n
              color: #337ab7;\n
              margin-right: 10px;\n
          }\n
          .clock-icon {\n
              padding-right: 5px;\n
          }\n
          .past-biometrics {\n
              margin-top: 10px;\n
              line-height: 2;\n
              width: 50%;\n
              float: right;\n
          }\n
          .past-container {\n
              display: flex;\n
              flex-direction: row;\n
              border-bottom: solid 1px #dddbdb;\n
              margin: 5px 0;\n
              align-items: baseline;\n
              width: 96%;\n
          }\n
          .past-container:nth-child(4) {\n
              border-bottom: none;\n
          }\n
          .value-container {\n
              display: flex;\n
              flex-direction: row;\n
              justify-content: center;\n
              align-items: baseline;\n
              width: 25%;\n
          }\n
          .past-date {\n
              font-style: italic;\n
              font-weight: bold;\n
              font-size: 12px;\n
              width: 55%;\n
              text-shadow: 0 0 black;\n
          }\n
          .past-value {\n
              font-size: 18px;\n
              font-weight: bold;\n
              padding-right: 3px;\n
          }\n
          .past-units {\n
              font-size: 15px;\n
          }\n
          .past-level {\n
              text-transform: capitalize;\n
              font-size: 16px;\n
              font-weight: bold;\n
              width: 45%;\n
              padding-left: 5px;\n
          }\n
          .no-measurements {\n
              font-style: italic;\n
              text-align: center;\n
              color: #666;\n
              font-weight: bold;\n
              font-size: 12px;\n
              text-shadow: 0 0 black;\n
          }\n
          .biometric-definition {\n
              margin: 10px 50px 0px 25px;\n
          }\n
          .biometric-definition > ol, .biometric-definition > li, .biometric-definition > p {\n
              page-break-inside: avoid !important;\n
              margin: 4px 0 4px 0;\n
          }\n
      \n
          .biometric-definition > p  {\n
              margin-bottom: 12px;\n
          }\n
          \n
          .biometric-definition > ul {\n
              margin-block-start: 0;\n
          }\n
          .biometric-warning {\n
              width: 100%;\n
              line-height: 1.26;\n
              margin-top: 8px;\n
          }\n
          .warning-results {\n
              font-weight: bold;\n
              padding-right: 3px;\n
              font-size: 16px;\n
          }\n
      \n
          .biometric-warning-unit {\n
              color: #666;\n
          }\n
          .page-break {\n
              page-break-after: always;\n
              break-inside: avoid;\n
          }\n
          .no-break {\n
              page-break-inside: avoid !important;\n
          }\n
      \n
      </style>\n
      \n
      </head>\n
      \n
      <body>\n
                  <div class="container">\n
              <img class="title-image" src="https://portal.ramphealth.com/images/healthProfileTitleWebOptimized.jpg">\n
              <div class="overlay">\n
                  <img class="title-logo" src="https://portal.ramphealth.com/images/rampHealthLogo.png">\n
                  <div class="title">Health Profile</div>\n
                  <div class="title-member"> Britzdtacny Chester</div>\n
                  <div class="title-date">Generated on October 24, 2023</div>\n
              </div>\n
                          <div class="category-container">\n
                                          <div class="category">\n
                              <div class="category-name">General Health</div>\n
                              <div class="result-container">\n
                                                                                              <div class="concern result-level">Concern</div>\n
                                      <div class="concern-number number">5</div>\n
                                                                                                                          <div class="normal result-level">Normal</div>\n
                                      <div class="normal-number number">1</div>\n
                                                          </div>\n
                          </div>\n
                                          <div class="category">\n
                              <div class="category-name">Health Category Tobacco </div>\n
                              <div class="result-container">\n
                                                                                              <div class="concern result-level">Concern</div>\n
                                      <div class="concern-number number">2</div>\n
                                                                                                                  </div>\n
                          </div>\n
                                          <div class="category">\n
                              <div class="category-name">Total Cholesterol</div>\n
                              <div class="result-container">\n
                                                                                              <div class="concern result-level">Concern</div>\n
                                      <div class="concern-number number">2</div>\n
                                                                                                                  </div>\n
                          </div>\n
                                          <div class="category">\n
                              <div class="category-name">Health Cat</div>\n
                              <div class="result-container">\n
                                                                                              <div class="concern result-level">Concern</div>\n
                                      <div class="concern-number number">1</div>\n
                                                                                                                  </div>\n
                          </div>\n
                                  </div>\n
                                                                      \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">10.6</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> HDL Cholesterol - DUPE </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">\n
                                                                          <span class="warning-results critical-concern-color">\n
                                                                              39.4\n
                                                                          </span>\n
                                                                          mg/dL below the recommended level\n
                                                                      </div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          7/17/2018\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div class="no-measurements">No additional measurements</div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>HDL Cholesterol</h1><p><br></p><p>JAMONA!</p><div>High Density Lipoprotein, or HDL cholesterol, helps clean other cholesterol out of tissues and to the liver so it can be removed from the body. This process is important in preventing the buildup of plaque and the hardening o...</div>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">124</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> Total Cholesterol </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">Within recommended level</div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          1/6/2023\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/6/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">123</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/5/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">73</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 7/17/2018 from Labs</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">210.2</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">critical</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div class="no-measurements">No additional measurements</div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <p><span style="font-size: 18px; color: rgb(0, 130, 181); font-weight: bold;">What It Is &amp; Why It Matters</span><span style="font-size: 18px;"></span><span style="font-size: 16px; color: rgb(0, 130, 181); font-weight: bold;"><br></span><span style="font-size: 16px;">Cholesterol is a fat-like substance found in the body that helps make hormones, vitamin D, and substances to help digest foods. It travels through the blood on proteins called lipoproteins. Two types carry cholesterol through the body:</span><b><span style="font-size: 16px;"> LDL</span></b><span style="font-size: 16px;"> (low-density lipoprotein), and </span><b><span style="font-size: 16px;">HDL </span></b><span style="font-size: 16px;">(high-density lipoprotein). Total cholesterol is a measure of these two lipoproteins, plus a portion of triglycerides – a type of fat. Your body makes all the cholesterol it needs, but you also get additional cholesterol from animal products, such as meat and dairy products. When there’s too much cholesterol in your blood, it can form a buildup of plaque, known as atherosclerosis, which can lead to coronary artery disease and increase the risk of stroke or heart attack.</span></p>\n
      <div class="ewa-rteLine" style=""><b style="font-size: 14.6667px;"><span style="font-size: 16px;">Ranges</span></b><br></div>\n
      <div class="ewa-rteLine" style="">\n
          <ul>\n
              <li><span style="color: rgb(97, 166, 14); font-size: 16px;">Normal</span><span style="font-size: 16px;">: Below 200 mg/dL </span></li>\n
              <li><span style="color: rgb(189, 148, 0); font-size: 16px;">Stuff to Watch</span><span style="font-size: 16px;">: 200-239 mg/dL </span></li>\n
              <li><span style="color: rgb(196, 13, 60); font-size: 16px;">Concern</span><span style="font-size: 16px;">: 240 mg/dL or above</span></li>\n
              <li><span style="font-size: 16px;"><span style="color: rgb(255, 0, 0);">Critical</span>: 350 mg/dL or above</span></li>\n
          </ul>\n
          <p><span style="font-size: 16px;"><span style="color: rgb(0, 130, 181); font-weight: 700;"><br><span style="font-size: 18px;">Understanding The Results</span><br></span></span><span style="font-size: 16px;">Generally having a total cholesterol of </span><span style="font-weight: bold; font-size: 16px;">over 200 mg/dL</span><span style="font-size: 16px;"> puts you at a higher risk of heart disease. However, total cholesterol is not always a perfect predictor of health. For example, HDL is a type of “good” cholesterol that helps clear out some of the other substances that may lead to atherosclerosis. A higher HDL is good, but it may also raise your total cholestero<span style="font-size: 16px;">l.</span></span></p>\n
          <p><span style="font-size: 16px;">It’s important to review your numbers with your healthcare provider so they can look at your entire health history and lifestyle to determine risk and course of action.</span></p>\n
          <p><b style="color: rgb(0, 130, 181); font-size: 16px;"><span style="font-size: 18px;"><br>What You Can Do<br></span></b><span style="font-size: 16px;">You can't change some factors, like age and genetics, but there are some actions you can take that may help to lower your cholesterol.&nbsp;</span></p>\n
      </div>\n
      <ul>\n
          <li><span style="font-size: 16px;">Follow a heart-healthy diet or work with a registered dietitian to get started on the DASH Eating Plan or Therapeutic Lifestyle Changes diet&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">Lose weight if you’re overweight&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">Get regular physical activity – at least 30 minutes on most days</span></li>\n
          <li><span style="font-size: 16px;">Practice daily stress management&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">Quit smoking or don’t start&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">Drink alcohol in moderation&nbsp;</span></li>\n
      </ul>\n
      <p><span style="font-size: 18px; color: rgb(0, 130, 181); font-weight: bold;"><br>Additional Information<br></span><span style="font-size: 16px;">If you would like more information about cholesterol, visit the following pages:<br></span><b style="font-style: italic;">*Please note that clicking the links below will take you outside of this platform to an external website.</b></p>\n
      <ul>\n
          <li>\n
              <div class="ewa-rteLine">\n
                  <div class="ewa-rteLine">\n
                      <div class="ewa-rteLine">\n
                          <div class="ewa-rteLine"><a href="https://medlineplus.gov/cholesterol.html">https://medlineplus.gov/cholesterol.html</a></div>\n
                      </div>\n
                  </div>\n
              </div>\n
          </li>\n
          <li><a href="https://www.nhlbi.nih.gov/health/blood-cholesterol/">https://www.nhlbi.nih.gov/health/blood-cholesterol/</a></li>\n
      </ul>\n
      <hr>\n
      <span style="font-size: 10px;">Sources Referenced:</span><br>\n
      <ol style="font-size: 10px;">\n
          <li>National Heart, Lung, and Blood Institute. (n.d.). Cholesterol. MedlinePlus. https://medlineplus.gov/cholesterol.html&nbsp;</li>\n
          <li> National Library of Medicine. (2022, April 4). Cholesterol levels. MedlinePlus. https://medlineplus.gov/lab-tests/cholesterol-levels/ </li>\n
          <li> National Heart, Lung, and Blood Institute. (2022, March 24). Blood Cholesterol. https://www.nhlbi.nih.gov/health/blood-cholesterol/</li>\n
      </ol>\n
      <p><span style="font-size: 10px; font-style: italic;">Ranges are reviewed by Dr. Kristin Oakes, Chief Clinical Officer. Recommendations may vary based on health history. Follow up with your provider to discuss your individual results.&nbsp;</span> </p>\n
      <ol style="font-size: 10px;"> </ol>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">2</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> Fasting Glucose </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">\n
                                                                          <span class="warning-results critical-concern-color">\n
                                                                              68\n
                                                                          </span>\n
                                                                          mg/dL below the recommended level\n
                                                                      </div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          1/27/2023\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">2</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/6/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">74</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/5/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">73</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div class="no-measurements">No additional measurements</div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <p><b><span style="font-size: 18px; color: rgb(0, 130, 181);">What It Is &amp; Why It Matters</span></b><br><span\n
              style="font-size: 16px;">When carbohydrates are eaten and digested, the body breaks them down into glucose, a\n
              type of sugar, which is your body’s main source of energy. A hormone called insulin then helps deliver the\n
              glucose from your blood to your cells. Too much glucose in your blood (hyperglycemia) could be a sign of\n
              diabetes.&nbsp;&nbsp;</span></p>\n
      <p><span style="font-size: 16px;">Untreated high glucose levels can lead to damaged blood vessels and nerves which\n
              increases the risk of heart disease, stroke, foot problems, kidney disease, eye disease, dental problems, and\n
              more. If</span><span style="font-size: 16px;">&nbsp;not treated, low glucose levels (hypoglycemia) also lead to\n
              health problems, including brain damage</span><span style="font-size: 16px;">.&nbsp;</span></p><span\n
          style="font-size: 16px; font-weight: bold;">Ranges</span>\n
      <ul>\n
          <li><span style="font-size: 16px; color: rgb(97, 166, 14);">Normal</span><span style="font-size: 16px;">: 70-99\n
                  mg/dL</span><br></li>\n
          <li><span style="font-size: 16px;"><span style="color: rgb(189, 148, 0);">Stuff to Watch</span>: 100-125 mg/dL or\n
                  50-69 mg/dL</span></li>\n
          <li><span style="font-size: 16px;"><span style="color: rgb(196, 13, 60);">Concern</span>: 126 mg/dL</span></li>\n
          <li><span style="font-size: 16px;"><span style="color: rgb(255, 0, 0);">Critical: </span>50 mg/dL or below or 450\n
                  mg/dL or higher</span><br></li>\n
      </ul>\n
      <div class="ewa-rteLine" style="font-family: Calibri; font-size: 14.6667px; white-space: pre-wrap;"><br></div>\n
      <div class="ewa-rteLine" style="font-family: Calibri; font-size: 14.6667px; white-space: pre-wrap;"><b\n
              style="font-family: Lato, sans-serif; font-size: 14px;"><span\n
                  style="font-size: 18px; color: rgb(0, 130, 181);">Understanding the Results</span></b></div>\n
      <div class="ewa-rteLine" style="font-family: Calibri; font-size: 14.6667px; white-space: pre-wrap;"><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;">Fasting glucose levels </span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif; font-weight: bold;">under 100 mg/dL</span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;"> means a</span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif; font-weight: bold;"> </span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;">low risk</span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;"><span style="font-weight: bold;"> </span>of diabetes. If\n
              you’re in the</span><span style="font-size: 16px; font-family: Lato, sans-serif; color: rgb(189, 148, 0);">\n
          </span><span style="font-size: 16px; font-family: Lato, sans-serif;">prediabetes<span\n
                  style="color: rgb(189, 148, 0); font-weight: bold;"> </span></span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;">range (<span style="font-weight: bold;">100-125\n
                  mg/dL</span>), this is a serious condition where blood sugar is high, but not high enough to be diagnosed as\n
              Type 2 diabetes. Lifestyle changes can normally delay or prevent diabetes from occurring.&nbsp;&nbsp;</span>\n
      </div>\n
      <div class="ewa-rteLine" style="font-family: Calibri; font-size: 14.6667px; white-space: pre-wrap;"><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;"><br></span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;">A result in the diabetes range (</span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif; font-weight: bold;">over 126 mg/dL</span><span\n
              style="font-size: 16px; font-family: Lato, sans-serif;">) indicates a high risk of diabetes, but high levels may\n
              also be a sign of kidney disease, hyperthyroidism, pancreatitis, or pancreatic cancer.&nbsp;</span><span\n
              style="font-family: Lato, sans-serif; font-size: 16px;">Low blood glucose</span><span\n
              style="font-family: Lato, sans-serif; font-size: 16px; font-weight: bold; color: rgb(189, 148, 0);">&nbsp;</span><span\n
              style="font-family: Lato, sans-serif; font-size: 16px;">(<span style="font-weight: bold;">under 70 mg/dL</span>)\n
              can be common among those who have type 1 diabetes or type 2 diabetes and take insulin or other diabetes\n
              medications.&nbsp;</span><span style="font-family: Lato, sans-serif; font-size: 16px;">Other health problems\n
              like kidney or heart disease can cause it as well.&nbsp;</span><span\n
              style="font-family: Lato, sans-serif; font-size: 16px;">This can usually be treated by ingesting carbs.\n
          </span><span style="font-family: Lato, sans-serif; font-size: 16px;">Severely&nbsp;low or high blood\n
              sugar</span><span style="font-family: Lato, sans-serif; font-size: 16px;"> (<span\n
                  style="font-weight: bold;">below 50 mg/dL or above 450</span>) needs treatment with an injection or\n
              emergency medical treatment.&nbsp;&nbsp;</span></div>\n
      <p><span style="font-style: italic;"><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">*If your\n
                  glucose results are higher or lower than the normal range, it doesn't necessarily mean you have a medical\n
                  condition needing treatment. High stress and certain medicines can affect glucose levels. To learn what your\n
                  results mean, talk to your health care provider.&nbsp;</span></span></p>\n
      <p><br><span style="font-size: 16px;">\n
              <font color="#0082b5"><b><span style="font-size: 18px;">What You Can Do</span><br></b></font>\n
          </span><span style="font-size: 16px;">Several lifestyle changes may help reduce blood glucose levels.&nbsp;</span>\n
      </p>\n
      <ul>\n
          <li><span style="font-size: 16px;">Lose weight – even a few pounds can have a positive impact&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">Increase physical activity – aim for at least 30 minutes a day&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">Make a healthy eating plan and stick to it&nbsp;</span></li>\n
          <li><span style="font-size: 16px;">If you smoke, get help quitting</span></li>\n
          <li><span style="font-size: 16px;">Manage all current health conditions and get regular preventive screenings</span>\n
          </li>\n
          <li><span style="font-size: 16px;">Ask your provider about managing low blood glucose or if a more personalized plan\n
                  or other tests are needed&nbsp;&nbsp;</span><br></li>\n
      </ul>\n
      <p><span style="font-weight: bold; color: rgb(0, 130, 181);"><span style="font-size: 16px;"><br><span\n
                      style="font-size: 18px;">Additional Information</span></span><br></span><span\n
              style="font-size: 16px;">If you would like more information about diabetes, visit the following pages:<br><span\n
                  style="font-style: italic; font-size: 14px;"><b>*Please note that clicking the links below will take you\n
                      outside of this platform to an external website.</b></span></span></p>\n
      <ul>\n
          <li>\n
              <div class="ewa-rteLine">\n
                  <div class="ewa-rteLine">\n
                      <div class="ewa-rteLine"><a\n
                              href="https://www.cdc.gov/diabetes/basics/diabetes.html">https://www.cdc.gov/diabetes/basics/diabetes.html</a>\n
                      </div>\n
                  </div>\n
              </div>\n
          </li>\n
          <li><a\n
                  href="https://www.niddk.nih.gov/health-information/diabetes">https://www.niddk.nih.gov/health-information/diabetes</a>\n
          </li>\n
      </ul>\n
      <hr><span style="font-size: 10px;">Sources Referenced:</span><br>\n
      <ol style="font-size: 10px;">\n
          <li>Centers for Disease Control and Prevention. (n.d.). Diabetes tests.\n
              https://www.cdc.gov/diabetes/basics/getting-tested.html&nbsp;&nbsp; </li>\n
          <li> National Institute of Diabetes and Digestive and Kidney Diseases. (2021, July). Low blood glucose\n
              (hypoglycemia.\n
              https://www.niddk.nih.gov/health-information/diabetes/overview/preventing-problems/low-blood-glucose-hypoglycemia&nbsp;&nbsp;\n
          </li>\n
          <li> Centers for Disease Control and Prevention. (2021, March 25). How to treat low blood sugar.\n
              https://www.cdc.gov/diabetes/basics/low-blood-sugar-treatment.html&nbsp;</li>\n
          <li>National&nbsp;Library of Medicine. (2022, July 7). Blood glucose test. MedlinePlus.\n
              https://medlineplus.gov/lab-tests/blood-glucose-test/</li>\n
      </ol>\n
      <p><span style="font-size: 10px;">Ranges are reviewed by Dr. Kristin Oakes, Chief Clinical Officer. Recommendations may\n
              vary based on health history. Follow up with your provider to discuss your individual results.&nbsp;</span><br>\n
      </p>\n
      <ol style="font-size: 10px;"> </ol>\n
      <p></p>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">22</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> Uric Acid </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning ">\n
                                                                          <span class="critical-concern-color warning-results">\n
          15\n
      </span>\n
      \n
      mg/dL \n
      \n
      above the recommended level\n
                                                                      </div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          1/31/2023\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">2</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">12</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">45</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">64</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div></div>\n
                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <p><b><span style="font-size: 18px; color: rgb(0, 130, 181);">What It Is &amp; Why It Matters<br></span></b><span style="font-size: 16px;">Uric acid is what your body creates when it breaks down substances called purines. Purines are produced in the body and are also found in foods like liver, anchovies, mackerel, dried beans and peas, and beer. Your kidneys usually remove excess through the urine. If too much builds up that your body can't remove, you can get sick.&nbsp;<b>Higher than normal levels</b> might be due to alcohol, effects of chemo, dehydration, excessive exercise, leukemia, obesity, psoriasis, certain foods, vitamin deficiencies, kidney problems, and other conditions. <b>Lower than normal levels</b> may be from HIV infection, metabolism diseases, certain medications, or other conditions.&nbsp;Follow up with your health care provider if you have questions or concerns or if your ranges are outside of the normal range.</span></p><div class="ewa-rteLine" style=""><span style="font-weight: bold; font-size: 16px;">Ranges</span></div><ul><li><span><span style="color: rgb(97, 166, 14); font-size: 16px;">Normal</span><span style="font-size: 16px;">:&nbsp;</span></span><span style="font-size: 16px;">3.5-7 mg/dL</span></li><li><span><span style="color: rgb(196, 13, 60); font-size: 16px;">Concern</span><span style="font-size: 16px;">:&nbsp;</span></span><span style="font-size: 16px;">&lt;3.5 mg/dL&nbsp;or 7-11&nbsp;mg/dL</span></li><li><span><span style="font-size: 16px; color: rgb(255, 0, 0);">Critical</span><span style="font-size: 16px;">: &gt;12&nbsp;mg/dL</span><br></span></li></ul><p><span style="font-weight: bold; color: rgb(0, 130, 181);"><span style="font-size: 16px;"><br><span style="font-size: 18px;">Additional Information</span></span><br></span><span style="font-size: 16px;">If you would like more information about uric acid, visit the following pages:<br><span style="font-style: italic; font-size: 14px;"><b>*Please note that clicking the links below will take you outside of this platform to an external website.</b></span></span></p><ul><li><div class="ewa-rteLine"><div class="ewa-rteLine"><div class="ewa-rteLine"><div class="ewa-rteLine"><a href="https://www.healthline.com/health/uric-acid-blood" target="_blank">https://www.healthline.com/health/uric-acid-blood </a></div></div></div></div></li><li><a href="https://medlineplus.gov/ency/article/003476.htm" target="_blank">https://medlineplus.gov/ency/article/003476.htm</a><span style="color: rgb(35, 82, 124); text-decoration-line: underline;"></span><br></li></ul><hr><span style="font-size: 10px;">Sources Referenced:</span><br><ol style=""> <li style="font-size: 10px;">National Library of Medicine. (2021, May 1). Uric acid - blood. MedlinePlus. https://medlineplus.gov/ency/article/003476.htm</li></ol><p><span style="font-size: 10px; font-style: italic;">Ranges are reviewed by Dr. Kristin Oakes, Chief Clinical Officer. Recommendations may vary based on health history. Follow up with your provider to discuss your individual results.&nbsp;</span> </p><ol style="font-size: 10px;"> </ol>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">22</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> LDL Cholesterol </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">Within recommended level</div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          2/20/2023\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">&gt;1</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">&lt;50</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">44</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/7/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">234</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">critical</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div></div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>LDL Cholesterol</h1><p>Low density lipoproteins, or LDL cholesterol is one element that contributes to Total Cholesterol. Cholesterol is necessary to help your body function properly, but too much LDL cholesterol specifically can lead to buildup of plaque in the arteries. Over time, this build up can lead to chest pain, or even a heart attack.&nbsp;</p><p>The lower your LDL cholesterol the better.&nbsp; Some ways you can lower this number are by healthy eating and minimizing the number of saturated and trans fats you eat, managing or losing weight, and getting at least 30 minutes of physical activity on most days. If these lifestyle changes are not helping, your doctor may also prescribe you medication. These changes can also increase your HDL cholesterol, which helps to clean the LDL cholesterol out of your blood, so it’s a win-win!</p>Borderline High<br><table class="table table-bordered"><tbody><tr><td>Optimal</td><td>Less than 100 mg/dL</td></tr><tr><td>Near Optimal</td><td>100-129 mg/dL</td></tr><tr><td>130-159 mg/dL</td></tr><tr><td>High</td><td>160-189 mg/dL</td></tr><tr><td>Very High<br></td><td>190 mg/dL and above</td></tr></tbody></table><p>LDL: The "Bad" Cholesterol. (2018, March 22). Retrieved June 20, 2018, from https://medlineplus.gov/ldlthebadcholesterol.html</p>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card normal-card">\n
                                                  <div class="current-level">\n
                                                      <div class="biometric-level normal-number">Normal</div>\n
                                                  </div>\n
                                                  <div class="biometric-details">\n
                                                      <div class="current-biometric-result">\n
                                                          <div class="biometric-value normal-color">400</div>\n
                                                          <div class="biometric-unit">IU/L</div>\n
                                                      </div>\n
                                                      <div class="biometric-info">\n
                                                          <div class="biometric-name ">Alkaline Phosphatase</div>\n
                                                                                                                  <div class="biometric-warning ">\n
                                                                  <span class="normal-color warning-results">\n
          253\n
      </span>\n
      \n
      IU/L \n
      \n
      above the recommended level\n
                                                              </div>\n
                                                                                                          </div>\n
                                                      <div class="biometric-time">\n
                                                      1/19/2023 \n
                                                      </div>\n
                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value normal-color">1</div>\n
                                                                                                                                              <div class="past-units"> IU/L</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                                  <div class="normal-color">Normal</div>\n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/6/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value normal-color">335</div>\n
                                                                                                                                              <div class="past-units"> IU/L</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                                  <div class="normal-color">Normal</div>\n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/6/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value normal-color">334</div>\n
                                                                                                                                              <div class="past-units"> IU/L</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                                  <div class="normal-color">Normal</div>\n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/5/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value normal-color">73</div>\n
                                                                                                                                              <div class="past-units"> IU/L</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                                  <div class="normal-color">Normal</div>\n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div></div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <p><b><span style="font-size: 18px; color: rgb(0, 130, 181);">What It Is &amp; Why It Matters<br></span></b><span style="font-size: 16px;">Alkaline phosphatase (ALP) is an enzyme that’s mainly found in your liver, bones, kidneys, and digestive system. This test is usually done as a routine checkup or to check or monitor liver function. When levels are outside of the normal range, it could be a sign of liver or kidney problems or bone disorders.&nbsp;</span><br></p><span style="font-size: 16px;"><b>Ranges</b></span><ul><li><span style="font-size: 16px;"><span style="color: rgb(97, 166, 14);">Normal</span>: Between 20-147 IU/L</span></li><li><span style="font-size: 16px;"><span style="color: rgb(196, 13, 60);">Concern</span>: under 20 IU/L or above 147 IU/L</span></li><li><span style="font-size: 16px;"><span style="color: rgb(255, 0, 0);">Critical</span>: above 200 IU/L<br></span><br></li></ul> <div class="ewa-rteLine" style="font-family: Calibri; font-size: 14.6667px; white-space: pre-wrap;"><br></div> <div class="ewa-rteLine" style=""><font color="#0082b5" style="font-family: Lato, sans-serif; font-size: 14px; white-space: pre-wrap;"><span style="font-size: 18px;"><b>Understanding the Results</b></span></font></div> <div class="ewa-rteLine" style=""><span style="font-size: 16px; white-space: pre-wrap;">ALP <b style="">over 147 IU/L</b> in the blood may be a sign of sarcoidosis, liver disease, lymphoma, bone disease, hepatitis, or other conditions. </span><span style="font-size: 16px; white-space: pre-wrap;">Low levels of ALP, </span><span style="font-size: 16px; white-space: pre-wrap; font-weight: bold;">below 20 IU/L</span><span style="font-size: 16px; white-space: pre-wrap;">, may indicate a vitamin deficiency, hypothyroidism, or another condition.</span></div><div class="ewa-rteLine" style=""><span style="font-size: 16px; white-space: pre-wrap;"><span style="font-style: italic;"><br></span></span></div><div class="ewa-rteLine" style=""><span style="font-size: 16px; white-space: pre-wrap;"><span style="font-style: italic;">*If levels aren’t in the normal range, it doesn’t necessarily mean you have a medical condition needing treatment. Follow up with your provider if your results are higher or lower than the normal range.</span></span></div><p><span style="font-weight: bold; color: rgb(0, 130, 181);"><span style="font-size: 16px;"><span style="font-size: 18px;"><br><br>Additional Information</span></span><br></span><span style="font-size: 16px;">If you would like more information about ALP, visit the following pages:<br><span style="font-style: italic; font-size: 14px;"><b>*Please note that clicking the links below will take you outside of this platform to an external website.</b></span></span></p><ul><li><div class="ewa-rteLine"><div class="ewa-rteLine"><div class="ewa-rteLine"><div class="ewa-rteLine"><a href="https://medlineplus.gov/lab-tests/alkaline-phosphatase/" target="_blank">https://medlineplus.gov/lab-tests/alkaline-phosphatase/</a></div></div></div></div></li><li><a href="https://my.clevelandclinic.org/health/diagnostics/22029-alkaline-phosphatase-alp" target="_blank">https://my.clevelandclinic.org/health/diagnostics/22029-alkaline-phosphatase-alp</a></li></ul><hr><span style="font-size: 10px;">Sources Referenced:</span><br><ol style=""> <li style="font-size: 10px;">National Library of Medicine. (2022, August 3). Alkaline Phosphatase. MedlinePlus. https://medlineplus.gov/lab-tests/alkaline-phosphatase/&nbsp;</li><li style="font-size: 10px;">National Library of Medicine. (2021, May 21). ALP-&nbsp; blood test. MedlinePlus. https://medlineplus.gov/ency/article/003470.htm</li></ol><p><span style="font-size: 10px; font-style: italic;">Ranges are reviewed by Dr. Kristin Oakes, Chief Clinical Officer. Recommendations may vary based on health history. Follow up with your provider to discuss your individual results.&nbsp;</span> </p><ol style="font-size: 10px;"> </ol>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                                                                                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">10.6</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> HDL Cholesterol - DUPE </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">\n
                                                                          <span class="warning-results critical-concern-color">\n
                                                                              39.4\n
                                                                          </span>\n
                                                                          mg/dL below the recommended level\n
                                                                      </div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          7/17/2018\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div class="no-measurements">No additional measurements</div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>HDL Cholesterol</h1><p><br></p><p>JAMONA!</p><div>High Density Lipoprotein, or HDL cholesterol, helps clean other cholesterol out of tissues and to the liver so it can be removed from the body. This process is important in preventing the buildup of plaque and the hardening o...</div>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">22</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> LDL Cholesterol </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">Within recommended level</div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          2/20/2023\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">&gt;1</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">&lt;50</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">44</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/7/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">234</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">critical</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div></div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>LDL Cholesterol</h1><p>Low density lipoproteins, or LDL cholesterol is one element that contributes to Total Cholesterol. Cholesterol is necessary to help your body function properly, but too much LDL cholesterol specifically can lead to buildup of plaque in the arteries. Over time, this build up can lead to chest pain, or even a heart attack.&nbsp;</p><p>The lower your LDL cholesterol the better.&nbsp; Some ways you can lower this number are by healthy eating and minimizing the number of saturated and trans fats you eat, managing or losing weight, and getting at least 30 minutes of physical activity on most days. If these lifestyle changes are not helping, your doctor may also prescribe you medication. These changes can also increase your HDL cholesterol, which helps to clean the LDL cholesterol out of your blood, so it’s a win-win!</p>Borderline High<br><table class="table table-bordered"><tbody><tr><td>Optimal</td><td>Less than 100 mg/dL</td></tr><tr><td>Near Optimal</td><td>100-129 mg/dL</td></tr><tr><td>130-159 mg/dL</td></tr><tr><td>High</td><td>160-189 mg/dL</td></tr><tr><td>Very High<br></td><td>190 mg/dL and above</td></tr></tbody></table><p>LDL: The "Bad" Cholesterol. (2018, March 22). Retrieved June 20, 2018, from https://medlineplus.gov/ldlthebadcholesterol.html</p>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                                                                                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">10.6</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> HDL Cholesterol - DUPE </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">\n
                                                                          <span class="warning-results critical-concern-color">\n
                                                                              39.4\n
                                                                          </span>\n
                                                                          mg/dL below the recommended level\n
                                                                      </div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          7/17/2018\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div class="no-measurements">No additional measurements</div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>HDL Cholesterol</h1><p><br></p><p>JAMONA!</p><div>High Density Lipoprotein, or HDL cholesterol, helps clean other cholesterol out of tissues and to the liver so it can be removed from the body. This process is important in preventing the buildup of plaque and the hardening o...</div>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">22</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> LDL Cholesterol </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">Within recommended level</div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          2/20/2023\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">&gt;1</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/27/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">&lt;50</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/10/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">44</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">concern</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                          <div class="past-container">\n
                                                                      <div class="past-date">\n
                                                                          <div>on 1/7/2023 from Consult</div>\n
                                                                      </div>\n
                                                                      <div class="value-container">\n
                                                                                                                                                  <div class="past-value critical-concern-color">234</div>\n
                                                                                                                                              <div class="past-units"> mg/dL</div>\n
                                                                      </div>\n
                                                                      <div class="past-level">\n
                                                                                                                                              <div class="critical-concern-color">critical</div>\n
      \n
                                                                                                                                          </div>\n
                                                                  </div>\n
                                                                                                                                                                                  <div></div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>LDL Cholesterol</h1><p>Low density lipoproteins, or LDL cholesterol is one element that contributes to Total Cholesterol. Cholesterol is necessary to help your body function properly, but too much LDL cholesterol specifically can lead to buildup of plaque in the arteries. Over time, this build up can lead to chest pain, or even a heart attack.&nbsp;</p><p>The lower your LDL cholesterol the better.&nbsp; Some ways you can lower this number are by healthy eating and minimizing the number of saturated and trans fats you eat, managing or losing weight, and getting at least 30 minutes of physical activity on most days. If these lifestyle changes are not helping, your doctor may also prescribe you medication. These changes can also increase your HDL cholesterol, which helps to clean the LDL cholesterol out of your blood, so it’s a win-win!</p>Borderline High<br><table class="table table-bordered"><tbody><tr><td>Optimal</td><td>Less than 100 mg/dL</td></tr><tr><td>Near Optimal</td><td>100-129 mg/dL</td></tr><tr><td>130-159 mg/dL</td></tr><tr><td>High</td><td>160-189 mg/dL</td></tr><tr><td>Very High<br></td><td>190 mg/dL and above</td></tr></tbody></table><p>LDL: The "Bad" Cholesterol. (2018, March 22). Retrieved June 20, 2018, from https://medlineplus.gov/ldlthebadcholesterol.html</p>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                                                                                          \n
                          <div class="biometrics-container">\n
                                                              <div class="row biometric-results">\n
                                                                                  <div class="biometric-card critical-concern-card">\n
                                                  <div class="current-level">\n
                                                                                                          <div class="biometric-level concern-number"> Concern</div>\n
                                                                                                  </div>\n
                                                                                                  <div class="biometric-details">\n
                                                          <div class="current-biometric-result">\n
                                                                                                                          <div class="biometric-value critical-concern-color">10.6</div>\n
                                                                  <div class="biometric-unit">mg/dL</div>\n
                                                                                                                  </div>\n
                                                          <div class="biometric-info">\n
                                                                                                                          <div class="biometric-name"> HDL Cholesterol - DUPE </div>\n
                                                                                                                                                                                                                                                  <div class="biometric-warning">\n
                                                                          <span class="warning-results critical-concern-color">\n
                                                                              39.4\n
                                                                          </span>\n
                                                                          mg/dL below the recommended level\n
                                                                      </div>\n
                                                                                                                                                                              </div>\n
                                                          <div class="biometric-time">\n
                                                          7/17/2018\n
                                                          </div>\n
                                                                                                  </div>\n
                                              </div>\n
                                                                                                                      <div class="past-biometrics">\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <div class="no-measurements">No additional measurements</div>\n
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>\n
                                                                          </div>\n
                                                                          <div class="row">\n
                                              <div class="biometric-definition no-break">\n
                                                  <h1>HDL Cholesterol</h1><p><br></p><p>JAMONA!</p><div>High Density Lipoprotein, or HDL cholesterol, helps clean other cholesterol out of tissues and to the liver so it can be removed from the body. This process is important in preventing the buildup of plaque and the hardening o...</div>\n
                                              </div>\n
                                          </div>\n
                                                                                  \n
                                                  </div>\n
                                                                  </div>\n
      </body>\n
      \n
      </html>\n
      '
  ]
];