  <?php include "includes/header.php";?>

    <div class="wrap-hero wrap-hero-game-1">
      <div class="out-container out-container-header">
        <div class="container">
          <header class="header" id="home">
            <nav class="header-nav-left">
              <ul>
                <li>
                  <a href="#wrap-news-1">Games</a>
                </li>
                <li>
                  <a
                    href="#aboutus"
                    onclick="LetsDisplay('#mission', '.section-about-us__missions')"
                    >Mission</a
                  >
                </li>
              </ul>
            </nav>
            <a href="#"
              ><img
                id="main-logo"
                src="./assets/img/logo.svg"
                alt="3Mind Games"
            /></a>
            <nav class="header-nav-right">
              <ul>
                <li>
                  <a
                    href="#aboutus"
                    onclick="LetsDisplay('#newTalents', '.section-about-us__new-talents')"
                    >Careers</a
                  >
                </li>
                <li>
                  <a
                    href="#aboutus"
                    onclick="LetsDisplay('#founders', '.section-about-us__founders')"
                    >About us</a
                  >
                </li>
              </ul>
            </nav>
            <button id="burger-menu">
              <img
                onclick="openmenu()"
                class="show-burger-image"
                id="hamburger_image"
                src="./assets/img/burger_menu.svg"
                alt="Menu"
              />
              <img
                onclick="closemenu()"
                id="close_image"
                src="./assets/img/close.svg"
                alt="Close Menu"
              />
            </button>
            <div class="mobile-menu-container">
              <div class="mobile-menu-header">
                <ul class="mobile-menu-nav">
                  <li>
                    <a href="#wrap-news-1" onclick="closemenu()">Games</a>
                  </li>
                  <li>
                    <a
                      href="#aboutus"
                      onclick="closemenu(); LetsDisplay('#mission', '.section-about-us__missions')"
                      >Mission</a
                    >
                  </li>
                  <li>
                    <a
                      href="#aboutus"
                      onclick="closemenu(); LetsDisplay('#newTalents', '.section-about-us__new-talents')"
                      >Careers</a
                    >
                  </li>
                  <li>
                    <a
                      href="#aboutus"
                      onclick="closemenu(); LetsDisplay('#founders', '.section-about-us__founders')"
                      >About us</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </header>
        </div>
      </div>
      <div class="out-container out-container-hero">
        <div class="container games-container-container">
          <div class="section-hero">
            <div class="hero-game show-hero-game" id="hero-game-1">
              <h1 class="heading-secondary">Welcome to 3Mind Games</h1>
              <p>
                We create passionate, rich, and emotionally engaging games with
                deep story lines and memorable characters
              </p>
              <img
                src="./assets/img/shadows_light_logo.png"
                alt="Shadow's Light"
                class="game-logo img"
              />

              <a href="#"
                ><button class="btn-primary btn-primary-header">
                  <span>Visit</span>
                  <img src="./assets/img/arrow-up-corner.svg" alt="Visit" />
                  <div class="btn-hoverline"></div></button
              ></a>
            </div>

            <div class="hero-game" id="hero-game-2">
              <h2 class="heading-secondary center-text">
                The Ultimate Gaming Experience!
              </h2>
              <p>
                We create passionate, rich, and emotionally engaging games with
                deep story lines and memorable characters
              </p>
              <img
                src="./assets/img/theprotagonist-logo.png"
                alt="Shadow's Light"
                class="game-logo img"
              />

              <a href="#"
                ><button class="btn-primary btn-primary-header">
                  <span>Visit</span>
                  <img src="./assets/img/arrow-up-corner.svg" alt="Visit" />
                  <div class="btn-hoverline"></div></button
              ></a>
            </div>
          </div>

          <div class="games-controller">
            <div class="line" id="line_1"></div>
            <div
              onclick="swapgame('1', '2')"
              class="game-controller-item active-game-controller-item"
              id="game-controller-item-1"
            >
              <span>Shadow’s Light</span>
              <svg
                width="30"
                height="36"
                viewBox="0 0 30 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15 10L21.9282 14V22L15 26L8.0718 22V14L15 10Z"
                  fill="#FFFBFA"
                />
                <path
                  d="M17 6.5359L15 5.3812L13 6.5359L6.0718 10.5359L4.0718 11.6906V14V22V24.3094L6.0718 25.4641L13 29.4641L15 30.6188L17 29.4641L23.9282 25.4641L25.9282 24.3094V22V14V11.6906L23.9282 10.5359L17 6.5359Z"
                  stroke="#FFFBFA"
                  stroke-opacity="0.16"
                  stroke-width="8"
                />
              </svg>
            </div>
            <div class="line" id="line_2"></div>
            <div
              onclick="swapgame('2', '1')"
              class="game-controller-item"
              id="game-controller-item-2"
            >
              <span>The Protagonist: EX-1 Light</span>
              <svg
                width="30"
                height="36"
                viewBox="0 0 30 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15 10L21.9282 14V22L15 26L8.0718 22V14L15 10Z"
                  fill="#FFFBFA"
                />
                <path
                  d="M17 6.5359L15 5.3812L13 6.5359L6.0718 10.5359L4.0718 11.6906V14V22V24.3094L6.0718 25.4641L13 29.4641L15 30.6188L17 29.4641L23.9282 25.4641L25.9282 24.3094V22V14V11.6906L23.9282 10.5359L17 6.5359Z"
                  stroke="#FFFBFA"
                  stroke-opacity="0.16"
                  stroke-width="8"
                />
              </svg>
            </div>
            <div class="line" id="line_3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrap-news out-container display-block" id="wrap-news-1">
      <div class="container news-container">
        <div class="news-item">
          <div class="left-side">
            <img
              class="img"
              src="./assets/img/choose-your-side.png"
              alt="Choose Your Side"
            />
          </div>
          <div class="right-side">
            <h2 class="heading-secondary">Choose your side</h2>
            <p class="small-header">
              Every story has two sides. Now you can experience both!
            </p>
            <p class="news-p news-p-desktop">
              Play as knights and magicians, or as demons and orcs in this dark
              fantasy narrative adventure. Change the story by making hard
              choices, and live with the consequences! Every story has two
              sides. Now you can experience both!
            </p>
          </div>
          <p class="news-p news-p-for-mobile">
            Play as knights and magicians, or as demons and orcs in this dark
            fantasy narrative adventure. Change the story by making hard
            choices, and live with the consequences! Every story has two sides.
            Now you can experience both!
          </p>
        </div>
        <div class="news-item">
          <div class="right-side">
            <h2 class="heading-secondary">Demons and orcs</h2>
            <p class="small-header">
              Light or dark, good or evil; everyone has their reasons
            </p>
            <p class="news-p news-p-desktop">
              In a barren & unforgiving eastern land, an orc chieftain stumbles
              upon a mysterious parched and withering woman, whose premonition
              could be the key to saving his clan and bringing down the Holy
              Kingdom.
            </p>
          </div>
          <div class="left-side">
            <img
              class="img"
              src="./assets/img/demons-and-orcs.png"
              alt="Demons and Orcs"
            />
          </div>
          <p class="news-p news-p-for-mobile">
            Play as knights and magicians, or as demons and orcs in this dark
            fantasy narrative adventure. Change the story by making hard
            choices, and live with the consequences! Every story has two sides.
            Now you can experience both!
          </p>
        </div>
      </div>
    </div>
    <div class="wrap-news out-container" id="wrap-news-2">
      <div class="container news-container">
        <div class="news-item">
          <div class="right-side">
            <h2 class="heading-secondary">The Protagonist: EX-1</h2>
            <p class="small-header">Turn-Based Tactical RPG</p>
            <p class="news-p news-p-desktop">
              Experience a gripping, original story, written by our narrative
              designer who worked on the Star Wars, Warhammer 40,000 and Mass
              Effect franchises
            </p>
          </div>
          <div class="left-side">
            <img
              class="img"
              src="./assets/img/tactical-rpg.png"
              alt="Tactical RPG"
            />
          </div>
          <p class="news-p news-p-for-mobile">
            Play as knights and magicians, or as demons and orcs in this dark
            fantasy narrative adventure. Change the story by making hard
            choices, and live with the consequences! Every story has two sides.
            Now you can experience both!
          </p>
        </div>
      </div>
    </div>

    <div class="out-game-mechanics out-container">
      <div class="container game-mechanics-container">
        <div class="section-about-us__heading">
          <h2 class="heading-secondary">Game Mechanics</h2>
        </div>
        <div class="mechanics-main">
          <div class="mechanics-item">
            <div class="mechanics-item-header">
              <h3>M.A.C.S.</h3>
              <h4>Martial arts combat system</h4>
            </div>
            <div class="mechanics-item-main">
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span>Customize close-combat Abilities</span>
              </p>
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Tailor, Experiment, Perfect Martial Combat Style using
                  system</span
                >
              </p>
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Share Created combos with the online player community</span
                >
              </p>
            </div>
          </div>
          <div class="mechanics-item">
            <div class="mechanics-item-header">
              <h3>D.D.S.</h3>
              <h4>Dynamic Dialogue System</h4>
            </div>
            <div class="mechanics-item-main">
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Players will take decisions that will have consequences</span
                >
              </p>
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Reactions and responses may drastically change based on their
                  previous choices</span
                >
              </p>
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Players have to pay attention to the way they navigate
                  conversations or they might be in for a surprise!</span
                >
              </p>
            </div>
          </div>
          <div class="mechanics-item">
            <div class="mechanics-item-header">
              <h3>I.A.P.S.</h3>
              <h4>Initiative and Action Points System</h4>
            </div>
            <div class="mechanics-item-main">
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Special I.A.P.S. Initiative and Action Points System to give
                  players full control over the actions</span
                >
              </p>
              <p>
                <img src="./assets/img/mechanics-polygon.svg" alt="Point" />
                <span
                  >Players can create their own strategy to defeat enemies</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="out-characters out-container">
      <div class="container characters-container">
        <div class="section-about-us__heading">
          <img
            onclick="prevChar()"
            class="left-arrow"
            src="./assets/img/arrow.svg"
            alt="Arrow left icon"
          />
          <h2 class="heading-secondary">CHARACTERS</h2>
          <img
            onclick="nextChar()"
            class="right-arrow"
            src="./assets/img/arrow.svg"
            alt="Arrow right icon"
          />
        </div>
        <div class="characters-main">
          <div class="character-big">
            <div class="left-side">
              <div class="main-character main-character-angel"></div>
            </div>
            <div class="right-side">
              <div
                class="right-side-inside display-grid"
                id="char-content-angel"
              >
                <h3>Angel</h3>
                <p>
                  A highly trained special agent with expertise in both sciences
                  and martial combat. The Terran government has devised a plan
                  to infiltrate the orbiting station and neutralize the alien
                  threat. Sent to lower the space station’s impenetrable
                  defenses, ANGEL instead, awakens in the infirmary of station’s
                  prison
                </p>
              </div>
              <div class="right-side-inside" id="char-content-tariel">
                <h3>Tariel</h3>
                <p>
                  A highly trained special agent with expertise in both sciences
                  and martial combat. The Terran government has devised a plan
                  to infiltrate the orbiting station and neutralize the alien
                  threat. Sent to lower the space station’s impenetrable
                  defenses, ANGEL instead, awakens in the infirmary of station’s
                  prison
                </p>
              </div>
              <div class="right-side-inside" id="char-content-dog">
                <h3>Dog</h3>
                <p>
                  A highly trained special agent with expertise in both sciences
                  and martial combat. The Terran government has devised a plan
                  to infiltrate the orbiting station and neutralize the alien
                  threat. Sent to lower the space station’s impenetrable
                  defenses, ANGEL instead, awakens in the infirmary of station’s
                  prison
                </p>
              </div>
              <div class="right-side-inside" id="char-content-astronaut">
                <h3>Astronaut</h3>
                <p>
                  A highly trained special agent with expertise in both sciences
                  and martial combat. The Terran government has devised a plan
                  to infiltrate the orbiting station and neutralize the alien
                  threat. Sent to lower the space station’s impenetrable
                  defenses, ANGEL instead, awakens in the infirmary of station’s
                  prison
                </p>
              </div>
              <div class="right-side-inside" id="char-content-sonia">
                <h3>Sonia</h3>
                <p>
                  A highly trained special agent with expertise in both sciences
                  and martial combat. The Terran government has devised a plan
                  to infiltrate the orbiting station and neutralize the alien
                  threat. Sent to lower the space station’s impenetrable
                  defenses, ANGEL instead, awakens in the infirmary of station’s
                  prison
                </p>
              </div>
            </div>
          </div>

          <div class="small-characters-out">
            <div class="small-characters-container">
              <div
                class="small-character-item-container small-character-item-container-active"
                id="smal-char-img-angel"
                onclick="selectCharacter('angel')"
              >
                <img
                  src="./assets/img/active-small-angel.png"
                  alt="Angel"
                  class="small-character-active-img"
                />
                <img
                  src="./assets/img/disabled-small-angel.png"
                  alt="Angel"
                  class="small-character-disabled-img"
                />
              </div>
              <div
                class="small-character-item-container"
                id="smal-char-img-tariel"
                onclick="selectCharacter('tariel')"
              >
                <img
                  src="./assets/img/active-small-tariel.png"
                  alt="Tariel"
                  class="small-character-active-img"
                />
                <img
                  src="./assets/img/disabled-small-tariel.png"
                  alt="Tariel"
                  class="small-character-disabled-img"
                />
              </div>
              <div
                class="small-character-item-container"
                id="smal-char-img-dog"
                onclick="selectCharacter('dog')"
              >
                <img
                  src="./assets/img/active-small-dog.png"
                  alt="Dog"
                  class="small-character-active-img"
                />
                <img
                  src="./assets/img/disabled-small-dog.png"
                  alt="Dog"
                  class="small-character-disabled-img"
                />
              </div>
              <div
                class="small-character-item-container"
                id="smal-char-img-astronaut"
                onclick="selectCharacter('astronaut')"
              >
                <img
                  src="./assets/img/active-small-astronaut.png"
                  alt="Astronaut"
                  class="small-character-active-img"
                />
                <img
                  src="./assets/img/disabled-small-astronaut.png"
                  alt="Astronaut"
                  class="small-character-disabled-img"
                />
              </div>
              <div
                class="small-character-item-container"
                id="smal-char-img-sonia"
                onclick="selectCharacter('sonia')"
              >
                <img
                  src="./assets/img/active-small-sonia.png"
                  alt="Sonia"
                  class="small-character-active-img"
                />
                <img
                  src="./assets/img/disabled-small-sonia.png"
                  alt="Sonia"
                  class="small-character-disabled-img"
                />
              </div>
            </div>
            <div class="small-characters-navigation">
              <button onclick="nextChar()">
                <img src="./assets/img/big-arrow-right.svg" alt="" />
              </button>
              <button onclick="prevChar()">
                <img src="./assets/img/big-arrow-left.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="out-container out-container-upcoming-games">
      <div class="container container-upcoming-games">
        <div class="section-about-us__heading">
          <img
            onclick="prevpic()"
            class="left-arrow"
            src="./assets/img/arrow.svg"
            alt="Arrow left icon"
          />
          <h2 class="heading-secondary">Upcoming Games</h2>
          <img
            onclick="nextpic()"
            class="right-arrow"
            src="./assets/img/arrow.svg"
            alt="Arrow right icon"
          />
        </div>

        <div class="main-upcoming-games">
          <div class="left-side">
            <img
              src="./assets/img/shadows_light_logo.png"
              alt="Shadow's Light"
              id="upcoming-logo"
            />
            <p class="upcoming-p">
              The long stalemate of war is about to be broken. On one side, a
              kingdom blessed by benevolent gods. On the other, a land crawling
              with monsters. The truth will soon be revealed...
              <br /><br />
              But all is not yet lost for humanity. The king musters a cohort of
              elite paladins for a secret and perilous mission that could end
              the threat once and for all.
            </p>
            <div class="upcoming-socials-container">
              <a href="#"><img src="./assets/img/steam.svg" alt="Steam" /></a>
              <a href="#"
                ><img src="./assets/img/sony.svg" alt="Playstation"
              /></a>
              <a href="#"><img src="./assets/img/xbox.svg" alt="Xbox" /></a>
            </div>

            <div class="upcoming-games-button-container">
              <a href="#" class="upcoming-button-container"
                ><button class="btn-primary btn-primary-header">
                  <span>Visit</span>
                  <img src="./assets/img/arrow-up-corner.svg" alt="Visit" />
                  <div class="btn-hoverline"></div></button
              ></a>
            </div>
          </div>
          <div class="right-side">
            <div class="upcoming-main-image">
              <div class="main-image-1" id="upcoming-main-image-inside"></div>
            </div>
            <div class="upcoming-small-images-container">
              <img
                id="small-image-1"
                onclick="changepicture('1')"
                class="active-small-image"
                src="./assets/img/upcoming-image-1.jpg"
                alt="Upcoming Image 1"
              />
              <img
                id="small-image-2"
                onclick="changepicture('2')"
                src="./assets/img/upcoming-image-2.jpg"
                alt="Upcoming Image 2"
              />
              <img
                id="small-image-3"
                onclick="changepicture('3')"
                src="./assets/img/upcoming-image-3.jpg"
                alt="Upcoming Image 3"
              />
              <img
                id="small-image-4"
                onclick="changepicture('4')"
                src="./assets/img/upcoming-image-4.jpg"
                alt="Upcoming Image 4"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section-about-us out-container" id="aboutus">
      <div class="container section-about-us__container">
        <div class="section-about-us__header">
          <div class="section-about-us__heading">
            <img
              onclick="prevDisplay()"
              class="left-arrow"
              src="./assets/img/arrow.svg"
              alt="Arrow left icon"
            />
            <h2 class="heading-secondary">ABOUT US</h2>
            <img
              onclick="nextDisplay()"
              class="right-arrow"
              src="./assets/img/arrow.svg"
              alt="Arrow right icon"
            />
          </div>
          <nav class="section-about-us__nav">
            <ul class="section-about-us__nav-box">
              <li
                class="section-about-us__nav-list active"
                id="founders"
                onclick="LetsDisplay('#founders', '.section-about-us__founders')"
              >
                <button class="btn section-about-us__nav-link">Founders</button>
                <div class="border__bottom"></div>
              </li>
              <li
                class="section-about-us__nav-list"
                id="mission"
                onclick="LetsDisplay('#mission', '.section-about-us__missions')"
              >
                <button class="btn section-about-us__nav-link">MISSION</button>
                <div class="border__bottom"></div>
              </li>
              <li
                class="section-about-us__nav-list"
                id="origins"
                onclick="LetsDisplay('#origins', '.section-about-us__origins')"
              >
                <button class="btn section-about-us__nav-link">ORIGINS</button>
                <div class="border__bottom"></div>
              </li>
              <li
                class="section-about-us__nav-list"
                id="newTalents"
                onclick="LetsDisplay('#newTalents', '.section-about-us__new-talents')"
              >
                <button class="btn section-about-us__nav-link">TALENTS</button>
                <div class="border__bottom"></div>
              </li>
            </ul>
          </nav>
        </div>
        <div class="section-about-us__subsec section-about-us__founders active">
          <div
            class="section-about-us__founder active alexandre-martel"
            onclick="changeFounder()"
          >
            <div class="single-founder__header">
              <p class="founder__name">ALEXANDRE MARTEL</p>
              <p class="founder__position">CEO AND PRODUCTION HEAD</p>
            </div>
            <img
              class="single-founder__img active-img"
              src="./assets/img/founder1.png"
              alt="ALEXANDRE MARTEL"
            />
            <img
              class="single-founder__img nonactive-img"
              src="./assets/img/founder1nonactive.png"
              alt="ALEXANDRE MARTEL"
            />
          </div>
          <button class="btn btn-founder-changer" onclick="changeFounder()">
            <img
              src="./assets/img/founder-changer-btn.svg"
              alt="Changer icon"
              class="founder-changer"
            />
          </button>
          <div
            class="section-about-us__founder dao-champagne"
            onclick="changeFounder()"
          >
            <div class="single-founder__header">
              <p class="founder__name">DAO CHAMPAGNE</p>
              <p class="founder__position">CCO AND CREATIVE DIRECTOR</p>
            </div>
            <img
              class="single-founder__img nonactive-img"
              src="./assets/img/founder2.png"
              alt="DAO CHAMPAGNE"
            />
            <img
              class="single-founder__img active-img"
              src="./assets/img/founder2active.png"
              alt="DAO CHAMPAGNE"
            />
          </div>
          <div class="about-founders">
            <div class="about-founder dao">
              <p>
                Dao possesses many years of experience in information
                technology, management, marketing, and multimedia. He has been
                in the video game industry since 2000 and worked in multimedia
                since 1996.
              </p>
              <p>
                Mastering the game design, graphic design, character design, and
                more. Dao shines while in charge of the creative direction of a
                project. As a former IT, Dao understands the technical aspect of
                the development process of video games and software engineering
                in general.
              </p>
              <p>
                Creating the high-level design documentation, and managing the
                design team, Dao oversees the creative planning of a project,
                making sure its vision is well understood in all departments.
                Dao has over 25 years of experience in various disciplines, and
                he is more specialized in video games.
              </p>
              <p>
                He worked on multiple AAA titles, in artist and designer roles,
                as a developer, and on the publishing side as well. This
                includes over 6 years at Ubisoft Montreal and various other
                studios.
              </p>
              <p>
                Some of the titles Dao worked on are: Splinter Cell series,
                Prince of Persia series, Rainbox Six series, MechWarrior series,
                and more.
              </p>
            </div>
            <div class="about-founder alexandre active">
              <p>
                Alexandre has extensive experience in management and
                administration. He also worked as a project manager on many AAA
                titles during his time at Ubisoft Montreal, including games such
                as, Splinter Cell, Rainbow Six and the Assassin’s Creeds series.
              </p>
              <p>
                His experience in big productions combined with his QA
                background ensures that whatever project produced by Alexandre,
                will be of the utmost quality. Alexandre strives to create
                innovative quality games that are fun and exciting, geared
                towards all types of gamers.
              </p>
              <p>
                As producer, he take care of the planning and management of the
                projects to ensure the team deliver on schedule. Alexandre also
                manage the planning of tasks available for each involved
                employees and subcontractors and works closely with the manager
                of each departments to develop different strategies.
              </p>
            </div>
          </div>
        </div>

        <div class="section-about-us__subsec section-about-us__missions">
          <div class="section-about-us__missions_header">
            <h3 class="heading-tertiary">
              At 3Mind Games we want to make the difference in the industry!
            </h3>
            <p class="missions-header__subheading">
              3Mind Games mission is to develop AAA video games and interactive
              content that are original, innovative, emotionally engaging and
              fun; using immersive environments and storylines`
            </p>
          </div>
          <div class="section__missions-values-cont">
            <h3 class="heading-tertiary missions__heading">Company Values</h3>
            <ul class="section__missions-values-box">
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">The consumer comes first</p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Provide quality games and unique experience
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Deliver the best story-driven games in the world
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Push the limits of new technologies and adapt to the changes
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Inspire others and future graduates
                </p>
              </li>
            </ul>
            <ul class="section__missions-values-box">
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Respect the communities, the players, and be transparent with
                  our fans
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Support the industry and the new talents
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Set an environment where people can realize their full
                  potential
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Promote team-oriented work – we are a big family
                </p>
              </li>
              <li class="section__missions-values-list">
                <img
                  class="missions-hexagon"
                  src="./assets/img/hexagon.svg"
                  alt="hexagon"
                />
                <p class="section__missions-value">
                  Promote positive and constructive attitude, be solution-driven
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="section-about-us__subsec section-about-us__origins">
          <div class="section-origins__first">
            <div class="section-origins__first-text">
              <h3 class="heading-tertiary">founded in canada, Montreal</h3>
              <p class="section-origins__P">
                Montreal is one of the world’s eight headquarter cities for UN
                specialized agencies
              </p>
              <p class="section-origins__P">
                It is a city famed for its openness and creativity. Montreal’s
                population density is similar to that of many European cities
                and ranks third-highest in North America, behind that of Boston
                and New York. This high density has enabled a rich neighbourhood
                life to flourish, with easy access to many nearby services. Best
                of all, the largest French-speaking city in America is host to a
                growing community of video game producers and developers of
                unparalleled talent and creativity.
              </p>
              <p class="section-origins__P">
                International organizations setting up their headquarters in
                Greater Montreal can take advantage of: The area’s convenient
                geographical location: Greater Montreal is at the crossroads of
                Europe and North America, just 90 minutes from New York City and
                6 hours and 50 minutes from Paris by plane
              </p>
            </div>
            <img
              src="./assets/img/QC CANADA.jpg"
              alt="Office building image"
              class="office_build-img"
            />
          </div>
          <div class="section-origins__second"></div>
        </div>
        <div class="section-about-us__subsec section-about-us__new-talents">
          <div class="section-new-talents__left-side">
            <h3 class="heading-tertiary">3MIND GAMES IS HIRING</h3>
            <h4 class="new-talents__subheading">
              Would you like to join a passionate and creative team?
            </h4>
            <p class="new-talents__P">
              You'll have an opportunity to be a significant member of the team
              working closely with other industry veterans. To implement
              solutions that are bespoke and crafted precisely to exceed
              expectations.
            </p>
            <form
              action="https://formsubmit.co/info@3mindgames.com"
              method="post"
              enctype="multipart/form-data"
              class="new-talents-form"
            >
              <input type="text" placeholder="Name" name="name" />
              <input type="text" placeholder="Position" name="position"/>
              <input type="email" placeholder="E-Mail" name="email"/>
              <input type="url" name="" placeholder="Portfolio URL" name="url">
              <textarea
                name="message"
                id=""
                cols="30"
                rows="10"
                placeholder="Message"
              ></textarea>
              <input type="file" name="attachment"/>
              <div>
                <button type="submit" class="btn-primary btn-primary-header">
                  <span>Send</span>
                  <img src="./assets/img/sumbiticon.svg" alt="Send icon" />
                  <div class="btn-hoverline"></div>
                </button>
              </div>
            </form>
          </div>
          <div class="section-new-talents__right-side">
            <img
              src="./assets/img/cityPhoto.jpg"
              alt="City image"
              class="new-talents__city-img"
            />
            <div class="new-talents-social-box">
              
            <a
              class="footer__header-social"
              href="https://twitter.com/3MindGames"
              target="_blank"
            >
              <img src="./assets/img/Twitter.svg" alt="Twitter logo" />
            </a>
            <a
              class="footer__header-social"
              href="https://www.facebook.com/3MindGames"
              target="_blank"
            >
              <img src="./assets/img/facebook.svg" alt="Facebook logo" />
            </a>
            <a
              class="footer__header-social"
              href="https://www.linkedin.com/company/3mindgames/"
              target="_blank"
            >
              <img src="./assets/img/Linkedin.svg" alt="Linkedin logo" />
            </a>
            </div>
            <p class="visit-socials-text">
              Visit our socials for more information
            </p>
          </div>
        </div>
      </div>
    </section>
<?php include("./includes/footer.php") ?>
   
