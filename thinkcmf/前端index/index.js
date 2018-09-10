  // api.get({
    //   url: 'portal/articles',
    //   data: {
    //     order: '-published_time'
    //   },
    //   success: data => {
    //     let newItems = api.updatePageList('id', data.data.list, this.formatListItem, true);
    //     let aw = Date.parse(new Date())
    //     console.log(aw);
    //     // console.log(newItems);
        
    //     console.log('成功');
      
        
    //     this.setData({
    //       list: newItems
    //     });

    //     if (data.data.list.length > 0) {
    //       this.currentPageNumber++;
    //     } else {
    //       this.setData({
    //         noMoreData: true
    //       });

    //       // 没有数据
    //       // this.setData({
    //       //     noMoreData: true,
    //       //     noData: true
    //       // });
    //     }

    //     wx.stopPullDownRefresh();
    //   }
    // });