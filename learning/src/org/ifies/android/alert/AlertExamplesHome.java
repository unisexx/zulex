package org.ifies.android.alert;

import org.ifies.android.R;

import android.app.Activity;
import android.app.AlertDialog;
import android.app.AlertDialog.Builder;
import android.content.DialogInterface;
import android.content.res.Resources;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.Button;
import android.widget.Toast;

public class AlertExamplesHome extends Activity {

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.alert_home);
		app_resources = getResources();
		
		setupAlerts();
		
		alert1_button = (Button) findViewById(R.id.alert1);
		alert1_button.setOnClickListener(new OnClickListener(){
			@Override
			public void onClick(View v) {
				alert1.show();
			}
		});
		
		alert2_button = (Button) findViewById(R.id.alert2);
		alert2_button.setOnClickListener(new OnClickListener(){
			@Override
			public void onClick(View v) {
				alert2.show();
			}
		});
		
		alert3_button = (Button) findViewById(R.id.alert3);
		alert3_button.setOnClickListener(new OnClickListener(){
			@Override
			public void onClick(View v) {
				alert3.show();
			}
		});
		
		alert4_button = (Button) findViewById(R.id.alert4);
		alert4_button.setOnClickListener(new OnClickListener(){
			@Override
			public void onClick(View v) {
				alert4.show();
			}
		});
	}
	
	private void setupAlerts() {
		alert1 = new AlertDialog.Builder(AlertExamplesHome.this)
		.setTitle("Alert Example 1")
		.setIcon(R.drawable.question)
		.setMessage("Do you Like this example?")
		.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a positive response
			}
		})
		.setNegativeButton("No", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a negative response
			}
		});
		
		alert2 = new AlertDialog.Builder(AlertExamplesHome.this)
		.setTitle("Alert Example 2")
		.setMessage("Do you want to save this activity?")
		.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a positive response
			}
		})
		.setNeutralButton("Cancel", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a neutral response
			}
		})
		.setNegativeButton("No", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a negative response
			}
		});
		
		alert3 = new AlertDialog.Builder(AlertExamplesHome.this)
		.setTitle("Alert Example 3")
		.setMessage("Lorem ipsum dolor sit amet, consectetur adipiscing elit. "
				+ "Mauris condimentum dolor vitae enim convallis hendrerit.\n\n"
				+ "Vestibulum luctus, risus a porttitor aliquam, tellus libero "
				+ "vulputate tortor, ac feugiat sem risus quis sem. Etiam convallis"
				+ "ullamcorper libero.\n\nAliquam ac mi. Lorem ipsum dolor sit amet, "
				+ "consectetur adipiscing elit. Pellentesque fringilla, neque dictum "
				+ "facilisis molestie, pede ipsum tincidunt tortor, sed mattis lacus arcu "
				+ "et justo.\n")
		.setNeutralButton("Ok", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a neutral response
			}
		});
		
		alert_list_items = app_resources.getStringArray(R.array.alert_list_keys);
		ArrayAdapter<String> array_adapter =  new ArrayAdapter<String>(this, R.layout.simple_list_item_1, alert_list_items);
		
		alert4 = new AlertDialog.Builder(AlertExamplesHome.this)
		.setTitle("Alert Example 4")
		.setAdapter(array_adapter, new DialogInterface.OnClickListener(){
			@Override
			public void onClick(DialogInterface dialog, int which) {
				Toast.makeText(AlertExamplesHome.this, "You clicked on " + which, Toast.LENGTH_LONG).show();
			}
		})
		.setNeutralButton("Close", new DialogInterface.OnClickListener() {
			public void onClick(DialogInterface dialog, int whichButton) {
				//Put your code in here for a neutral response
			}
		});
		
	}
	
	private Resources app_resources;
	
	private Button alert1_button;
	private Button alert2_button;
	private Button alert3_button;
	private Button alert4_button;
	private Builder alert1;
	private Builder alert2;
	private Builder alert3;
	private Builder alert4;
	
	private String[] alert_list_items;
}