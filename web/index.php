<?php
$pageTitle = 'Colludium | Game Studio';
include __DIR__ . '/includes/header.php';
?>

<main id="home">
    <section class="hero container">
        <div class="hero-copy reveal">
            <p class="eyebrow">Game studio • 2D • 3D • Sandbox • Online</p>
            <h1>Build worlds players never want to leave.</h1>
            <p class="lead">
                We create immersive gaming experiences that blend creativity, technology,
                and scalable online systems for ambitious communities.
            </p>
            <div class="hero-actions">
                <a href="#games" class="primary-button">Explore Games</a>
                <a href="#contact" class="secondary-button">Book a Demo</a>
            </div>
            <div class="hero-metrics">
                <div>
                    <strong>120+</strong>
                    <span>game prototypes</span>
                </div>
                <div>
                    <strong>18M</strong>
                    <span>players reached</span>
                </div>
                <div>
                    <strong>9 yrs</strong>
                    <span>creative expertise</span>
                </div>
            </div>
        </div>

        <div class="hero-visual reveal">
            <div class="visual-glow"></div>
            <div class="visual-card card-main">
                <div class="card-badge">Live</div>
                <div class="card-icon">✦</div>
                <div class="card-name">OpenWorld</div>
            </div>
            <div class="visual-card card-mini mini-left">
                <span>2D</span>
                <strong>Pixel Quest</strong>
            </div>
            <div class="visual-card card-mini mini-right">
                <span>3D</span>
                <strong>Skyforge</strong>
            </div>
        </div>
    </section>

    <section class="partners container reveal">
        <span>Trusted by creators and publishers</span>
        <div class="partner-list">
            <div>GameForge</div>
            <div>VoxelArc</div>
            <div>SandboxX</div>
            <div>Multiplayer Lab</div>
            <div>Orbit Play</div>
        </div>
    </section>

    <section id="about" class="section container reveal">
        <div class="section-heading">
            <p class="eyebrow">Why Colludium</p>
            <h2>Powerful game systems for worlds that scale.</h2>
        </div>

        <div class="feature-grid">
            <article class="feature-card">
                <div class="icon">▣</div>
                <h3>2D Game Design</h3>
                <p>Fast, stylish, and highly engaging gameplay loops crafted for mobile and desktop players.</p>
            </article>
            <article class="feature-card">
                <div class="icon">△</div>
                <h3>3D Worlds</h3>
                <p>Immersive environments, cinematic scenes, and performance-aware rendering for modern platforms.</p>
            </article>
            <article class="feature-card">
                <div class="icon">◈</div>
                <h3>Sandbox Creation</h3>
                <p>Open-ended systems with player freedom, progression, discovery, and customization at the core.</p>
            </article>
            <article class="feature-card">
                <div class="icon">◎</div>
                <h3>Online Multiplayer</h3>
                <p>Reliable live systems, matchmaking, communities, and social layers designed for sustained engagement.</p>
            </article>
        </div>
    </section>

    <section id="games" class="showcase section">
        <div class="container reveal">
            <div class="section-heading center">
                <p class="eyebrow">Featured Experiences</p>
                <h2>Genre-driven development for every kind of adventure.</h2>
            </div>

            <div class="game-grid">
                <article class="game-card">
                    <div class="game-thumb thumb-one"></div>
                    <div class="game-body">
                        <span class="tag">2D</span>
                        <h3>Pixel Rift</h3>
                        <p>Action-packed dungeon exploration with responsive combat and deep progression.</p>
                    </div>
                </article>

                <article class="game-card">
                    <div class="game-thumb thumb-two"></div>
                    <div class="game-body">
                        <span class="tag">3D</span>
                        <h3>Skyforge</h3>
                        <p>Epic aerial battles, exploration, and a living open world with dynamic weather.</p>
                    </div>
                </article>

                <article class="game-card">
                    <div class="game-thumb thumb-three"></div>
                    <div class="game-body">
                        <span class="tag">Sandbox</span>
                        <h3>Wildlands</h3>
                        <p>Craft, survive, and build your own legacy in a rich, player-driven ecosystem.</p>
                    </div>
                </article>

                <article class="game-card">
                    <div class="game-thumb thumb-four"></div>
                    <div class="game-body">
                        <span class="tag">Online</span>
                        <h3>Nova Arena</h3>
                        <p>Competitive online battles built for teamwork, strategy, and long-term social play.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="studio" class="stats section container reveal">
        <div class="section-heading">
            <p class="eyebrow">Studio Performance</p>
            <h2>Built for quality, scale, and player retention.</h2>
        </div>

        <div class="stats-grid">
            <div class="stat-box">
                <strong>96%</strong>
                <span>player satisfaction</span>
            </div>
            <div class="stat-box">
                <strong>150+</strong>
                <span>live updates shipped</span>
            </div>
            <div class="stat-box">
                <strong>24/7</strong>
                <span>live ops monitoring</span>
            </div>
            <div class="stat-box">
                <strong>4.9/5</strong>
                <span>studio rating</span>
            </div>
        </div>
    </section>

    <section class="cta-block container reveal">
        <div>
            <p class="eyebrow">Let’s create your next hit</p>
            <h2>Turn your game vision into a playable experience.</h2>
        </div>
        <a href="#contact" class="primary-button">Start the Conversation</a>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
