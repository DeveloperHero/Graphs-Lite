<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bingo</title>
</head>
<body>
	<h1>Bingo</h1>
	<div class="graphsProject" id="app">
		<div class="graphsOptions">
			<table class="form-table">
				<tr>
					<th scope="row"><label for="labels">Labels</label></th>
					<td><input class="regular-text" type="text" id="labels" v-model="chartlabelsString" @keyup="addLabels"></td>
				</tr>
				<template v-for="(data, index) in datasets">
					<tr>
						<th scope="row"><label for="label">Label</label></th>
						<td><input class="regular-text" type="text" id="label" v-model="data.label" @keyup="addDatasetLabel(index)"></td>
					</tr>
					<tr>
						<th scope="row"><label for="datasets">Data</label></th>
						<td><input class="regular-text" type="text" id="datasets" v-model="data.chartDatasetDataString" @keyup="addDatasetData(index)"></td>
					</tr>
					<tr>
						<th scope="row"><label for="colors">Color</label></th>
						<td><input class="regular-text" type="text" id="colors" v-model="data.chartDatasetBgColor" @keyup="addDatasetBgColor(index)"></td>
					</tr>
				</template>
				<tr>
					<th scope="row"><label></label></th>
					<td>
						<input type="button" id="add_dataset" class="button button-primary" value="Add Dataset" @click="addDataset">
						<!-- <input type="button" id="delete_dataset" class="button button-danger" value="Delete Dataset" @click="deleteDataset"> -->
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="title">Show Chart Title</label></th>
					<td><input type="checkbox" id="title" v-model="showTitle" @change="showingGraphTitle"></td>
				</tr>
				<tr>
					<th scope="row"><label for="titleText">Title Text</label></th>
					<td><input class="regular-text" type="text" id="titleText" v-model="titleText" @keyup="addTitleText"></td>
				</tr>
				<tr>
					<th scope="row"><label for="legend">Show Legend</label></th>
					<td><input type="checkbox" id="legend" v-model="showLegend" @change="showingGraphLegend"></td>
				</tr>
				<tr>
					<th scope="row"><label for="legend">Legend Position</label></th>
					<td>
						<select id="legend_position" v-model="legendPosition" @change="changeLegendPosition">
							<option selected="selected" value="top">Top</option>
							<option value="bottom">Bottom</option>
							<option value="left">Left</option>
							<option value="right">Right</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div class="graphsDiv">
			<canvas id="barChart"></canvas>
		</div>
	</div>
</body>
</html>