    <form class="form-search" 
          id="SearchForm_SearchForm" 
          action="/home/SearchForm" 
          method="get" 
          enctype="application/x-www-form-urlencoded">

    	<input type="text" 
    		   class="search-input-box input-large" 
    		   id="SearchForm_SearchForm_Search" 
    		   name="Search"
    		   placeholder="...">

    	<button name="action_results" 
    			value="Go" 
    			id="SearchForm_SearchForm_action_results" 
                class="action action btn" 
    			type="submit">Search</button>

      <small class="search-tip">SEARCH (Topic, whvp Image No. or Project)</small>

    	<p id="SearchForm_SearchForm_error" class="message " style="display: none"></p>

    </form>