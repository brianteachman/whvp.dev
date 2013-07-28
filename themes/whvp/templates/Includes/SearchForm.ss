    <form class="form-search" 
          id="SearchForm_SearchForm" 
          action="/home/SearchForm" 
          method="get" 
          enctype="application/x-www-form-urlencoded">

    	<input type="text" 
    		   class="search-input-box input-large" 
    		   id="SearchForm_SearchForm_Search" 
    		   name="Search"
    		   placeholder="Search (e.g., 001-WFD)">

    	<button name="action_results" 
    			value="Go" 
    			id="SearchForm_SearchForm_action_results" 
                class="action action btn" 
    			type="submit">Search</button>

    	<p id="SearchForm_SearchForm_error" class="message " style="display: none"></p>

    </form>