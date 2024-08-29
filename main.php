<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review</title>
    <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
                }

                .main {
                    max-width: 800px;
                    margin: 2em auto;
                    padding: 0 1em;
                }

                .movie-review {
                    display: flex;
                    margin-bottom: 2em;
                    background-color: white;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                }

                .movie-poster {
                    width: 150px;
                    height: 225px;
                    object-fit: cover;
                }

                .review-content {
                    padding: 1em;
                }

                .review-content h2 {
                    margin-top: 0;
                    font-size: 1.5em;
                }

                .review-content .review {
                    font-size: 1em;
                    color: #333;
                }
                .review-form {
            display: none;
            margin:10px auto;
            border:3px solid brown;
            padding:20px;
            width:50%;
            background:linear-gradient(170deg, rgba(0, 0, 0, 0.397), white);
            border-radius: 15px;
        }
        .review-form input {
            border-radius: 5px;
        }
           
    </style>
</head>
<body>
    <?php
    include 'header&footer/header.php';
    ?>
<div class="main">
  <div class="movie-review">
            <img src="photos&videos/rocky.jpg" class="movie-poster">
            <div class="review-content">
                <h2>ROCKY</h2>
                <p class="review">There is no question that Rocky is one of the most inspirational films ever made!
                    Rocky represents everyone who just never got a shot at life, but is then given a life changing opportunity!
                    Does he (and, by extension, we) take it, or let it slip away?
                    That is the crux upon which the entire film is based.
                    Much of this inspiration comes from Sylvester Stallone himself, who drew upon many of his own experiences to craft such a true-to-life, yet engaging narrative.</p>
                    <p class="rating">Rating: ★★★★☆</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/avatar.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>AVATAR</h2>
                <p class="review">There is a reason why this film is STILL the number one film in the world…

                    I can remember seeing this film all the way back in 2009, and I was honestly blown away by it, and I still am!
                    I was 12 years old at the time when I saw it and now I’m 26 years old having just seen the second film in 2022, let that sink in…
                    I can remember thinking that it was the coolest thing I had ever seen!
                    I honestly had never seen anything quite like it before.</p>
                    <p class="rating">Rating: ★★★★★</p> <button onclick="showReviewForm()">Write a Review</button>
            </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/spider.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>THE AMAZING SPIDER MAN</h2>
                <p class="review">As a big fan of the Spider-Man character, I was really looking forward to seeing this film, mainly after seeing the first trailer. Sure, it was only five years after the Sam Raimi series ended prematurely, but what can I say? I LOVE that webhead. And I also love this movie. With strong performances by its cast, an interesting spin on the Spider-Man origin story, and very well-made action set pieces, The Amazing Spider-Man thrills while also carrying a healthy dose of emotion.</p>
                <p class="rating">Rating: ★★★★☆</p> <button onclick="showReviewForm()">Write a Review</button>
            </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/web.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>MADAM WEB</h2>
                <p class="review">Madame Web left much to be desired for someone well-versed in the art of cinema. It's a film that might tickle the fancy of a preteen, but it falls flat

                    There were moments that I did laugh out loud but that humor stemmed from the sheer absurdity of the film's execution, rather than witty writing or comedic timing
                    
                    The movie also spoon-feeds the audience with excessive exposition, undermining the viewer's intelligence by over-explaining the things that happen on screen. 
                    <p class="rating">Rating: ★★★☆☆</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/avengers.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>THE AVENGERS ENDGAME</h2>
                <p class="review">
                    Where to begin, where to begin! You know a movie is outstanding when the end credits alone are more epic than the majority of films released in the last 20 years! This film is the pure definition of an emotional roller coaster and throughout its run time brings about fascination, humor, sadness, incredible excitement, and sheer finality. This is not your typical superhero movie and some viewers used to the entertaining, nonstop action style of the previous films may be disappointed, but I think that this movie brilliantly satisfies and subverts expectations. </p>
                    <p class="rating">Rating: ★★★★★</p> <button onclick="showReviewForm()">Write a Review</button>
             </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/note.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>THE NOTEBOOK</h2>
                <p class="review">First of all the movie is a must watch and amazing. The storytelling is beautiful and consistent and take the viewer on a nice back and forth journey. When the movie starts the opening scene has a beautiful scenery captured which will take you to a more beautiful journey ahead. 

                    Some of the scenes i loved were when Allie came back and Noah took her to the lake, that was an exquisite part; the ducks, the place and the moment was just perfect. And then the rain starts everything took place right at that moment. </p>
                    <p class="rating">Rating: ★★★★☆</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/assassin.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>ASSASSIN'S CREED</h2>
                <p class="review">The movie looked so good: the visuals were excellent, the acting was great, the soundtrack was great... but the story was just OK.
                    I didn't feel any connection to the minor characters, and I was a little confused about the main characters' motives. It felt like so much was left out, like it was too big and too epic a story to tell in 2 hours. The concept was really interesting and as someone who hasn't played the games I still really wanted this to work out because it seemed so intriguing. But everything happened so quickly and then it was over.</p>
                    <p class="rating">Rating: ★★★☆☆</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
        
        <div class="movie-review">
            <img src="photos&videos/robot.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>MR. ROBOT</h2>
                <p class="review">The show follows the footsteps of Elliot Alderson, a cybersecurity engineer in a cybersecurity firm ‘Allsafe’ by day and vigilante hacker operating from his computer, apprehending no-gooders by night. Elliot struggles with social interactions because of his Chronic Depression and Social Anxiety but he persists with zeal to follow through with his plans. Throughout the show, we witness the world in a second person perspective- we listen to his thoughts talking directly to us while we try to understand the unfolding storyline together.
                    <p class="rating">Rating: ★★★★★</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/knuckles.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>KNUCKLES</h2>
                <p class="review">Pretty bad casting…Idris was great…of course that’s the main reason you made this.  

                    But ancillary cast missed the mark.  I know you were going for a Jim Carrey kind of zany made for families thing…but funny is funny…and the writing had poor flow and  a weak plot.   I’m being generous to say that over 50% of the humor did not land.  
                    <p class="rating">Rating: ★★★☆☆</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
        <div class="movie-review">
            <img src="photos&videos/strange.jpg" alt="Movie Poster" class="movie-poster">
            <div class="review-content">
                <h2>DOCTER STRANGE</h2>
                <p class="review">Before this movie, my only real exposure to Doctor Strange was in The Super Hero Squad Show. I really liked the character and his powers, so I was looking forward to a Doctor Strange movie from day 1. I'm glad that I was able to see this movie in theaters, as a movie with these kinds of visual tricks demands to be seen on the big screen. Apart from the wacky effects, this movie boasts great performances, music, writing, and characters.
                    <p class="rating">Rating: ★★★★★</p> <button onclick="showReviewForm()">Write a Review</button>
                </div>
        </div>
    </div>
    <div id="review-form" class="review-form">
        <form action="submit_review.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="movie">Movie:</label>
            <input type="text" id="movie" name="movie" required><br><br>
            <label for="review">Review:</label>
            <textarea id="review" name="review" required></textarea><br><br>
            <input type="submit" value="Submit Review">
        </form>
    </div>
    <?php
include 'header&footer/footer.php';
?>
<script>
    function showReviewForm() {
        document.getElementById('review-form').style.display = 'block';
    }
</script>
</body>
</html>