(function() {
       
          // *******Start First Button************

	tinymce.PluginManager.add('moderna_1st_button', function( editor, url ) {
		editor.addButton( 'moderna_1st_button', {
			text: 'audio',
			icon: true,
            onclick: function() {
						editor.windowManager.open( {
							title: 'Insert audion link',
							body: [
								{
									type: 'textbox',
									name: 'title',
									label: 'title',
									
								},
								{
									type: 'textbox',
									name: 'songwriter',
									label: 'songwriter',
								
								},
								{
									type: 'textbox',
									name: 'width',
									label:'width'
									/*label: 'Multiline Text Box',
									multiline: true,
									minWidth: 300,
									minHeight: 100*/
								},
								{
									type: 'textbox',
									name: 'height',
									label:'height'
								},
								{
									type: 'textbox',
									name: 'src',
									label:'src'
								},
								{
									type: 'textbox',
									name: 'mp3',
									label:'mp3'
								},
								{
									type: 'textbox',
									name: 'ogg',
									label:'ogg'
								},
								{
									type: 'textbox',
									name: 'wma',
									label:'wma'
								},
								{
									type: 'textbox',
									name: 'm4a',
									label:'m4a'
								},
								{
									type: 'textbox',
									name: 'wav',
									label:'wav'
								},
								{
									type: 'textbox',
									name: 'loop',
									label:'loop'
								},
								{
									type: 'textbox',
									name: 'autoplay',
									label:'autoplay'
								},
								{
									type: 'textbox',
									name: 'preload',
									label:'preload'
								},
								{
									type: 'textbox',
									name: 'buttontext',
									label:'buttontext'
								},
								{
									type: 'textbox',
									name: 'buttnlink',
									label:'buttnlink'
								},
							],
							onsubmit: function( e ) {
								editor.insertContent( '[audiotrack  title="'+e.data.title+'" songwriter="'+e.data.songwriter+'" src="'+e.data.src+'"  mp3="'+e.data.mp3+'" width="'+e.data.width+'" height="'+e.data.height+'"  ogg="'+e.data.ogg+'"  wma="'+e.data.wma+'" m4a="'+e.data.m4a+'"  wav="'+e.data.wav+'"  loop="'+e.data.loop+'" autoplay="'+e.data.autoplay+'" preload ="'+e.data.preload+'" buttontext="'+e.data.buttontext+'"  buttonlink="'+e.data.buttnlink+'"]');
							}
						});
					}

		});
	});

	                   // *******End First Button************

	                   // *******Start Second Button************


	tinymce.PluginManager.add('moderna_2nd_button', function( editor, url ) {
		editor.addButton( 'moderna_2nd_button', {
			text: 'pricingbox',
			icon: true,
		    type: 'menubutton',
			menu: [
              { 
              	text: 'pricing main header',
              	onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Main Button Types',
							body: [
								{
									type: 'textbox',
									name: 'title',
									label: 'Title',
									value: ''
								},
							],
							onsubmit: function( e ) {
								editor.insertContent( '[pric_heading_title  title="'+e.data.title+'"]');
							}
						});
					}

				},
				{ 
              	  text: 'pricing column manage',
              	  onclick: function() {
						editor.windowManager.open( {
							title: 'Manage your pricing Box',
							body: [
							    {
									type: 'listbox',
									name: 'columnheading',
									label: 'Number of column/Column length(same for all, total should be 12)',
									'values': [
										{text: '2', value: '2'},
										{text: '3', value: '3'},
										{text: '4', value: '4'}
									]
								},
								{
									type: 'textbox',
									name: 'heading1',
									label: 'Heading 1',
									value: 'Very'
								},
								{
									type: 'textbox',
									name: 'heading2',
									label: 'Heading 2',
									value: 'Basic'
								},
								{
									type: 'listbox',
									name: 'heading_style',
									label: 'Heading Style',
									'values': [
										{text: '', value: ''},
										{text: 'special', value: 'special'},
										
									]
								},
								{
									type: 'textbox',
									name: 'pricing_terms',
									label: 'Pricing Terms',
									value: '$15.00 / Month'
								},
								{
									type: 'textbox',
									name: 'price_action_link',
									label: 'Price Action Link',
									value: '#'
								},
								{
									type: 'listbox',
									name: 'price_action_type',
									label: 'Price Action Type',
									'values': [
										{text: 'theme', value: 'theme'},
										{text: 'primary', value: 'primary'},
										{text: 'warning', value: 'warning'},
										{text: 'success', value: 'success'},
										{text: 'danger', value: 'danger'},
										{text: 'info', value: 'info'},
										
									]
								},

								
								{
									type: 'textbox',
									name: 'price_action_name',
									label:'Price Action Name',
									value: 'Register Now'
									/*label: 'Multiline Text Box',
									multiline: true,
									minWidth: 300,
									minHeight: 100*/
								},
								/*{
									type: 'listbox',
									name: 'listboxName',
									label: 'List Box',
									'values': [
										{text: 'Option 1', value: '1'},
										{text: 'Option 2', value: '2'},
										{text: 'Option 3', value: '3'}
									]
								}*/
							],
							onsubmit: function( e ) {
								editor.insertContent( '[pric_column_3    column_line_type="'+e.data.columnheading+'"      heading1="'+e.data.heading1+'"  heading2="'+e.data.heading2+'"   heading_style="'+e.data.heading_style+'"  pricing_terms ="'+e.data.pricing_terms+'"  price_action_link="'+e.data.price_action_link+'"  price_action_type="'+e.data.price_action_type+'"   price_action_name="'+e.data.price_action_name+'"]<Please give the menu list here, click left 4 number button and write the menu name between this gap>[/pric_column_3]');
							}
						});
					}

				}


			]
		});
	});
                
                // *******End Second Button************

                


})();