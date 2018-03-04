package tests

import "testing"

func Test_hoge(t *testing.T) {
	type args struct {
		a int
		b int
	}
	tests := []struct {
		name string
		args args
		want int
	}{
		{name: "1,2", args: args{1, 2}, want: 2},
		{name: "2,3", args: args{2, 3}, want: 6},
		{name: "10,20", args: args{10, 20}, want: 200},
	}
	for _, tt := range tests {
		t.Run(tt.name, func(t *testing.T) {
			if got := hoge(tt.args.a, tt.args.b); got != tt.want {
				t.Errorf("hoge() = %v, want %v", got, tt.want)
			}
		})
	}
}
