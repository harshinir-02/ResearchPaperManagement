<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Research paper mangment system</title>
    </head>
    <body>
        <form name="add" method="post" action="addpaper.php">
            <header><h1>Add new paper<h1></header>
            <label>Title<span> * </span></label>
            <textarea id="title" name="title" rows="2" cols="50" required></textarea>
            <br><br>
            <label for="type">Type<span> * </span></label>
            <select name="type" id="type">
                <option value="journal">Journal</option>
                <option value="conference">Conference</option>
                <option value="bookchapter">Book Chapter</option>
              </select>
            <br>
            <label>Name of Journal/ Conference/ Book Chapter<span> * </span></label>
            <textarea id="venue" name="venue" rows="2" cols="50" required></textarea>
            <br><br>
            <label>Volume<span> * </span></label>
            <input name="volume" type="text" value="" required />
            <br><br>
            <label>Issue<span> * </span></label>
            <input name="issue" type="text" value="" required />
            <br><br>
            <label>Date<span> * </span></label>
            <input name="date" type="date" value="" required />
            <br><br>
            <input type="radio" id="level1" name="level" value="National" required>
            <label for="level1"> National </label><span>
            <input type="radio" id="level2" name="level" value="International">
            <label for="level2"> International</label>
            <br><br>
            <label>Indexing [SCI/SCIE/Scopus/Web of Science/Others]<span> * </span></label>
            <input name="indexing" type="text" value="" required />
            <br><br>
            <label for="abstract">Abstract<span> * </span></label>
            
            <textarea id="abstract" name="abstract" rows="4" cols="50" required></textarea>
            <br><br>
            

            <label for="keywords">Keywords <span> * </span></label>
            <textarea id="keywords" name="keywords" rows="4" cols="50" required></textarea>
            <br><br>
            
            <label for="coauthors">Co-authors (if any)</label>
            
            <textarea id="coauthors" name="coauthors" rows="4" cols="20"></textarea>
            <br><br>
            <button type="submit" name="submit">Submit</button>
          </form>
    </body>
</html>