using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class SliderController : MonoBehaviour {

	[Header("Get Slider")]
	public Slider progressSlider;

	[Header("Get Text")]
	public Text progressIndicator;

	void Awake()
	{
		progressSlider = GameObject.Find ("SliderProgress").gameObject.GetComponent<Slider>();
		progressIndicator = GameObject.Find ("lblSliderIndicator").gameObject.GetComponent<Text>();

	}

	public void ChangingValues()
	{
		switch (int.Parse(progressSlider.value.ToString())) {
		case 0:
			progressIndicator.text = "Not Yet";
			break;

		case 1:
			progressIndicator.text = "On Going";
			break;

		case 2:
			progressIndicator.text = "Delayed";
			break;

		case 3:
			progressIndicator.text = "Finished";
			break;

		default:
			break;
		}

	}

}
