<form class="box1" onsubmit="return false" method="GET">
        <h2>Insert/Delete from Database</h2>
        <label for="type">Insert/Delete:</label>
        <select id="type" name="type">
            <option value="insert">Insert</option>
            <option value="delete">Delete</option>
        </select>
        <label for="year">Year:</label>
        <select id="year" name="year">
            <option value="1995 - 1th Annual Screen Actors Guild Awards">1995</option>
            <option value="1996 - 2nd Annual Screen Actors Guild Awards">1996</option>
            <option value="1997 - 3rd Annual Screen Actors Guild Awards">1997</option>
            <option value="1998 - 4th Annual Screen Actors Guild Awards">1998</option>
            <option value="1999 - 5th Annual Screen Actors Guild Awards">1999</option>
            <option value="2000 - 6th Annual Screen Actors Guild Awards">2000</option>
            <option value="2001 - 7th Annual Screen Actors Guild Awards">2001</option>
            <option value="2002 - 8th Annual Screen Actors Guild Awards">2002</option>
            <option value="2003 - 9th Annual Screen Actors Guild Awards">2003</option>
            <option value="2004 - 10th Annual Screen Actors Guild Awards">2004</option>
            <option value="2005 - 11th Annual Screen Actors Guild Awards">2005</option>
            <option value="2006 - 12th Annual Screen Actors Guild Awards">2006</option>
            <option value="2007 - 13th Annual Screen Actors Guild Awards">2007</option>
            <option value="2008 - 14th Annual Screen Actors Guild Awards">2008</option>
            <option value="2009 - 15th Annual Screen Actors Guild Awards">2009</option>
            <option value="2010 - 16th Annual Screen Actors Guild Awards">2010</option>
            <option value="2011 - 17th Annual Screen Actors Guild Awards">2011</option>
            <option value="2012 - 18th Annual Screen Actors Guild Awards">2012</option>
            <option value="2013 - 19th Annual Screen Actors Guild Awards">2013</option>
            <option value="2014 - 20th Annual Screen Actors Guild Awards">2014</option>
            <option value="2015 - 21st Annual Screen Actors Guild Awards">2015</option>
            <option value="2016 - 22nd Annual Screen Actors Guild Awards">2016</option>
            <option value="2017 - 23rd Annual Screen Actors Guild Awards">2017</option>
            <option value="2018 - 24th Annual Screen Actors Guild Awards">2018</option>
            <option value="2019 - 25th Annual Screen Actors Guild Awards">2019</option>
            <option value="2020 - 26th Annual Screen Actors Guild Awards">2020</option>
            <option value="2021 - 27th Annual Screen Actors Guild Awards">2021</option>
            <option value="2022 - 28th Annual Screen Actors Guild Awards">2022</option>
        </select>
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="FEMALE ACTOR IN A LEADING ROLE">FEMALE ACTOR IN A LEADING ROLE</option>
            <option value="MALE ACTOR IN A LEADING ROLE">MALE ACTOR IN A LEADING ROLE</option>
            <option value="FEMALE ACTOR IN A SUPPORTING ROLE">FEMALE ACTOR IN A SUPPORTING ROLE</option>
            <option value="MALE ACTOR IN A SUPPORTING ROLE">MALE ACTOR IN A SUPPORTING ROLE</option>
            <option value="FEMALE ACTOR IN A DRAMA SERIES">FEMALE ACTOR IN A DRAMA SERIES</option>
            <option value="MALE ACTOR IN A DRAMA SERIES">MALE ACTOR IN A DRAMA SERIES</option>
            <option value="FEMALE ACTOR IN A COMEDY SERIES">FEMALE ACTOR IN A COMEDY SERIES</option>
            <option value="MALE ACTOR IN A COMEDY SERIES">MALE ACTOR IN A COMEDY SERIES</option>
            <option value="FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES">FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</option>
            <option value="MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES">MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</option>
            <option value="CAST IN A MOTION PICTURE">CAST IN A MOTION PICTURE</option>
            <option value="ENSEMBLE IN A COMEDY SERIES">ENSEMBLE IN A COMEDY SERIES</option>
            <option value="ENSEMBLE IN A DRAMA SERIES">ENSEMBLE IN A DRAMA SERIES</option>
        </select>
        <label for="actorname">Actor Name:</label>
        <input type="text" name="actorname" placeholder="Actor name" id="actorname">
        <label for="showname">Show Name:</label>
        <input type="text" name="showname" placeholder="Show name" id="showname">
        <label for="won">Winner:</label>
        <select id="won" name="won">
            <option value="True">YES</option>
            <option value="False">NO</option>
        </select>
        <input type="submit" name="" value="SUBMIT" onclick=" this.form.submit(); ">
    </form>